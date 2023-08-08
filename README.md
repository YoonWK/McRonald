# McRonald
An E-Commerce/ Online Food Ordering System for customers to order food and drinks from McRonalds through the website. The website is coded in PHP, CSS, HTML, JavaScript and Bootstrap
Note: Every page is responsive except for the Item List

Customer:
Login to create account > verify account through email and password > view short introductory of McRonald at home page > View and possibly fill in Contact Us page>  View Food and Beverages on item list > filter/ search items> add items into cart > remove items from cart > fill in payment information and make order > logout from account.
Admin: 
Login to create account > verify account through email and password > view short introductory of McRonald at home page> view information of contact form created by customer  > View and possibly fill in Contact Us page>  View Food and Beverages on item list > filter/ search items>  add items into cart > remove items from cart > fill in payment information and make order > logout from account.

System SetUp
1. Download Zip file
2. Extract the file and Copy McRonalds folder, and paste in in root directory:
Wamp64 > www > McRonalds
3. Open PHPMyAdmin (http://localhost/phpmyadmin/)
	- create a database named “ass”
	 ![image](https://github.com/YoonWK/McRonald/assets/120373444/3a42adba-8b12-4cb8-9daa-a49a75ea44a4)

	- import ass.sql (located  in McRonalds > shopping_cart3 > ass.sql)
	
	-without creating another database named “db”

	![image](https://github.com/YoonWK/McRonald/assets/120373444/cd0957e3-f1e4-4a59-8bd3-6142bfbcc876)
	
 	- import db.sql (located  in McRonalds > WAD > db.sql)


Screenshots
Login
 ![image](https://github.com/YoonWK/McRonald/assets/120373444/d5e6ef33-4d46-4c19-9cfa-16f82ecca710)

Welcome Page
 ![image](https://github.com/YoonWK/McRonald/assets/120373444/bb87d161-4fe6-4927-ab9f-ad9770dbcfa1)

About Us Page
 ![image](https://github.com/YoonWK/McRonald/assets/120373444/3c9caf42-f5af-4b09-97dc-058182af3cee)

Contact Us
 ![image](https://github.com/YoonWK/McRonald/assets/120373444/cb282dbe-06c7-4eee-8e97-bbc5357179e7)

Admin Page
 ![image](https://github.com/YoonWK/McRonald/assets/120373444/500ce8a5-0dde-40a2-b55b-e3df60ce63d6)

Item List Page
 ![image](https://github.com/YoonWK/McRonald/assets/120373444/a82813c6-2cc7-431d-8c24-5330d5327413)

Cart/ Wishlist Page
 ![image](https://github.com/YoonWK/McRonald/assets/120373444/b1fbee94-e631-405e-bb92-ebfced65f6a4)

Logout

 ![image](https://github.com/YoonWK/McRonald/assets/120373444/a73a2d0a-e397-4dd3-bc57-5cf6a6668442)


Assumptions:
1. If the user choose pay by cash/ Touch n Go as payment method, the system assumes that the customer will pay physically without fail after ordering anything and will allow the user to go through by triggering “Make Order” Button.
2. user will filter the items by category with this
  ![image](https://github.com/YoonWK/McRonald/assets/120373444/37d9e712-9a14-4773-a71b-c5ea61d3cc55)

3. McRonalds only allow take aways/ drive thru and will not provide any online delivery service thus, payment method will be performed physically.

