/*
Advantages: In future whenever we need to update the rulese for password validation
 
 */
package midtermreviewcodeforpartc;

/**
 *
 * @author Youngshin
 */
public class PasswordValidator {
    public boolean validatePassword(String password){
        boolean flag = false;
        int specialCharCount=0;
            //iterate over each character to see if it is a special character
            for(int i=0;i<password.length(); i++)
            {
                if(!(Character.isLetterOrDigit(password.charAt(i))))
                {
                    //now we know there is at least one special character
                    specialCharCount++;
                }
            }
            if(specialCharCount>0 &&password.length()>7)
            {
                flag=true;
            }
            return flag;
        
    }
    
}
