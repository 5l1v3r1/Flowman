import java.util.List;

public class Activity {
	String id;
	String name;
	List<String> implementation;
	String fromId;
	int step;
	String output;

	// This is the constructor of the class Activity
	public Activity(String id, String name, List<String> implementation,
			String fromId, int step) {
		this.id = id;
		this.name = name;
		this.implementation = implementation;
		this.fromId = fromId;
		this.step = step;
		this.output = "/home/ubuntu/upload/"+ id + ".output";
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getOutput() {
		return output;
	}

	public void setOutput(String output) {
		this.output = output;
	}

	public String getId() {
		return id;
	}

	public List<String> getImplementation() {
		return implementation;
	}

	public String getFromId() {
		return fromId;
	}


	public void setFromId(String fromId) {
	     this.fromId = fromId;
	}

	
	public Integer getStep() {
		return step;
	}

	@Override
	public String toString() {
		
		String str = "";
		str += this.name + " -- /home/ubuntu/default-script ";

		for (int i = 0; i < implementation.size(); i++) {
			str += implementation.get(i) + " ";
		}
		str += this.output;
		return str;
	}
}