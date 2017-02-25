
# Codeigniter-Noticeboard-System

A online noticeboard system built on the codeigniter php framework, The noticeboard system can be used by any organisation or school, inhave implemented most of codeigniter framework functionality.
The notice board system has two user areas the backend for the Admin and Frontend forthe normal users, users can post announcement only when registered and will have to wait for the admin to verify the post against spamming before the post is public.

## Technologies: 
1. PHP(Codeignitor) for backend.
2. HTML, CSS and bootstrap(CSS framework) for frontend.
3. Javascript, Ajax for user experience.

## Technical Description

#### Model: I have create four models in this project.
1. Auth_model : This model controls the authentication aspect of the platform.
2. Category_model : This model controls all aspect regarding categories .
3. Post_model : This model controls the fetching of posts and inserting of post in db.
4. User_model : This model fetches the users from the database, currently function for only admin, you can extend this if you want.

#### View
All the views are named as their functionality. the header and footer view contain the header and footer of every pages and necessary links on stylesheets and scripts.

## Controllers

### public controllers
1. Auth : This deals with the authentication of users on the platform.
2. post : This deals with all post in the public area.
3. home : This displays the homepage of the noticeboard and its post.

### Admin controllers
1. dashboard : this displays the admins dashboard
2. category : This displays the categories
3. users : This displays the users
4. post : This displays the post 








