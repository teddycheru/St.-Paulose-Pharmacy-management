# Pharmacy management

-----------CONFIGURATION-----------

Create a Database called 'file-management' then create:
1. # table name 'admin' with columns
    'id' int() Auto-increament
    'username' Varchar(255)
    'password' Varchar(255)
    
   # table name 'customer' with columns
    'id' int() Auto-increament
    'name' Varchar(255)
    'age' int()
    'gender' Varchar(255)
    'phone' int()
    'drug' Varchar(255)
    
   # table name 'drugs' with columns
     'id' int() Auto-increament
     'Dname' Varchar(255)
     'Brand' Varchar(255)
     'Edate' DATE
     'Quant' int()
     
   # table name 'empty' with columns
     'id' int()
    
   # table name 'owner' with columns
     'id' int() Auto-increament
     'username' Varchar(255)
     'password' Varchar(255)
--------------------------------------------------------

------------------------USAGE---------------------------

First Run ownreregisterpuo.php and then register a super admin or simply an owner who is going to have a privilege to
add Pharmacists that adminster drugs and customers.
Next open welcome.php or login1.php to log into the homepage of the pharmacy management system by putting Pharmacist admin credentials
provided by the owner.
 Note that the pharmacist can change his/her password afterwards at any time.
Finally, explore every pages and their functionality.
When ever you finish exploring or using, do not forget to sign out by clicking the log out button.

Thanks!
