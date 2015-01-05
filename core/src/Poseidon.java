import java.io.BufferedReader;
import java.io.File;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.TreeSet;

import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;
import org.w3c.dom.Document;
import org.w3c.dom.Element;
import org.w3c.dom.Node;
import org.w3c.dom.NodeList;

public class Poseidon {
	public static void main(String[] args) {
		try {
			StringBuffer buffOutput = new StringBuffer();
			File xmlFile = new File(args[0]);
			DocumentBuilderFactory documentFactory = DocumentBuilderFactory
					.newInstance();
			DocumentBuilder documentBuilder = documentFactory
					.newDocumentBuilder();
			Document doc = documentBuilder.parse(xmlFile);
			doc.getDocumentElement().normalize();
			NodeList activities = doc.getElementsByTagName("Activity");
			NodeList transitions = doc.getElementsByTagName("Transition");
			Map<String, Activity> map = new HashMap<String, Activity>();

			for (int i = 0; i < activities.getLength(); i++) {
				Node nodeActivity = activities.item(i);
				Element activity = (Element) nodeActivity;
				List<String> tmp = new ArrayList<String>();
				tmp.add(activity.getElementsByTagName("Implementation").item(0)
					.getTextContent());
				Activity act = new Activity(activity.getAttribute("Id"),
					activity.getAttribute("Name"), tmp, "0", 0);
				map.put(activity.getAttribute("Id"), act);
			}

			int gamba = 0;
			// TODO IMPROVE
			for (int j = 0; j < transitions.getLength(); j++) {
				
				Node nodeTransition = transitions.item(j);
				Element transition = (Element) nodeTransition;
				map.get(transition.getAttribute("To")).step = map
					.get(transition.getAttribute("From")).step + 1;
				map.get(transition.getAttribute("To"))
					.getImplementation()
					.add(map.get(transition.getAttribute("From"))
					.getOutput());
				map.get(transition.getAttribute("To")).setFromId(transition.getAttribute("From"));
				if (map.get(transition.getAttribute("To")).step > gamba) {
					gamba = map.get(transition.getAttribute("To")).step;
				}
			}
			
			TreeSet<Activity> act = new TreeSet<Activity>(
					new ActivityComparator());
			
			for (Activity a : map.values()) {
				for (int j = 0; j < transitions.getLength(); j++) {
					Node nodeTransition = transitions.item(j);
					Element transition = (Element) nodeTransition;
					if (a.getId().equals(transition.getAttribute("To"))){
						if (a.getStep() <= map.get(transition.getAttribute("From")).getStep()){
							a.step = map.get(transition.getAttribute("From")).getStep() + 1;
						}
					}
				}
				act.add(a);
			}
			
			for (Activity a : act) {
				Process p;
				p = Runtime.getRuntime().exec("sudo lxc-attach -n " + a.toString());
				p.waitFor();
				BufferedReader reader = new BufferedReader(new InputStreamReader(p.getInputStream()));
	            String line = "";			
				while ((line = reader.readLine())!= null) {
					buffOutput.append(line);
				}
				System.out.println(a.getStep() + " - sudo lxc-attach -n " + a.toString());
			}
		} catch (Exception e) {
			e.printStackTrace();
		}
	}
}