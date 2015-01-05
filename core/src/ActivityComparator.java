import java.util.Comparator;

public class ActivityComparator implements Comparator<Activity> {
	@Override
	public int compare(Activity act0, Activity act1) {
		// TODO Auto-generated method stub
		if (act0.getStep() > act1.getStep()) {
			return 1;
		} else {
			return -1;
		}
	}
}