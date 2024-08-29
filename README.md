Posts
StartFragment

These endpoints manage the creation, retrieval, updating, and deletion of blog posts on the platform. They allow both users and admins to interact with the blog's content.

EndFragment

﻿

CRUD
StartFragment

Create: Endpoints that allow authenticated users to add new blog posts to the website.
Read: Endpoints for retrieving blog posts or user information. These include fetching a list of all posts, retrieving specific posts, or gathering user data.
Update: Endpoints that allow authenticated users or admins to modify existing blog posts.
Delete: Endpoints for removing blog posts, users, or admins from the system.
EndFragment

﻿

GET
Retrieve All Posts
http://127.0.0.1:8000/api/posts
StartFragment

Retrieves a list of all blog posts available on the platform. The response includes detailed information about each post, such as the title, content, author, publication date, and any relevant metadata. This endpoint is accessible to all users, and the posts can be optionally filtered or sorted based on parameters like date, author, or category.
EndFragment

﻿

Request Headers
Accept
application/json
Body
raw (json)
json
{
    
}
GET
Retrieve a single Post
http://127.0.0.1:8000/api/posts/8
StartFragment

Retrieves detailed information about a specific blog post using its unique ID. This endpoint is accessible to all users.
EndFragment

﻿

POST
Storing Post
http://127.0.0.1:8000/api/posts
StartFragment

Allows authenticated users to create a new blog post. The post's content, title, and related metadata must be provided.
EndFragment

﻿

Authorization
Bearer Token
Token
<token>
Request Headers
Accept
application/json
Body
raw (json)
json
{
    "title" : "Post 99",
    "body" : "this is a post 99 body"
}
PUT
Updatiing a Post
http://127.0.0.1:8000/api/posts/8
StartFragment

Allows authenticated users to update an existing blog post. Only the author or an admin can modify the content.
EndFragment

﻿

Authorization
Bearer Token
Token
<token>
Request Headers
Accept
application/json
Body
raw (json)
json
{
    "title": "Post 9999 updated",
    "body": "this is a post 9999 body updated"
}
DELETE
Delete a Post
http://127.0.0.1:8000/api/posts/8
StartFragment

Allows the deletion of a specific blog post. Only the author or an admin can perform this action.
EndFragment

﻿

Authorization
Bearer Token
Token
<token>
Request Headers
Accept
application/json
Authentication
StartFragmentThe API employs token-based authentication to ensure that only authorized users can access certain endpoints. Users must include a valid token in the header of their requests.EndFragment.

﻿

POST
Register
http://127.0.0.1:8000/api/register
StartFragment

Registers a new user by providing necessary details like name, email, and password
EndFragment

﻿

Request Headers
Accept
application/json
Body
raw (json)
json
{
    "name": "Ziad Hany USER",
    "email": "ziad2@gmail.com",
    "password": "123",
    "password_confirmation":"123"
}
POST
Login
http://127.0.0.1:8000/api/login
StartFragment

Authenticates a user and provides a token for accessing protected endpoints.
EndFragment

﻿

Request Headers
Accept
application/json
Body
raw (json)
json
{
    "email":"ziad@gmail.com",
    "password":"123"
}
GET
User Info From Token
13|vXMcWdXWU8RtnE3xiKWRVsNhBmNBWd8xzJ7cyvFy06bf936a
StartFragment

Retrieves user details based on the provided authentication token. This includes the user’s profile information.
EndFragment

﻿

Request Headers
Accept
application/json
Body
raw (json)
json
{
    "email":"zizo@gmail.com",
    "password":"123"
}
POST
Logout
http://127.0.0.1:8000/api/logout
StartFragment

Description: Logs out the user by invalidating the current token.
EndFragment

﻿

Authorization
Bearer Token
Token
<token>
Request Headers
Accept
application/json
Admin Authentication
StartFragmentThe API employs token-based authentication to ensure that only authorized users can access certain endpoints. Users must include a valid token in the header of their requests.EndFragment

﻿

POST
Admin Register
http://127.0.0.1:8000/api/admin/register
StartFragment

Description: Registers a new admin user with additional privileges to manage content and users.
EndFragment

﻿

Request Headers
Accept
application/json
Body
raw (json)
json
{
    "name": "Ziad Hany Admin 3",
    "email": "ziad1@gmail.com",
    "password": "123",
    "password_confirmation":"123"
}
POST
Admin Login
http://127.0.0.1:8000/api/admin/login
StartFragment

Authenticates an admin and provides a token for accessing admin-specific endpoints.

EndFragment

﻿

Request Headers
Accept
application/json
Body
raw (json)
json
{
    "email": "ziad1@gmail.com",
    "password": "123"
}
POST
Admin Logout
http://127.0.0.1:8000/api/admin/logout
StartFragment

Logs out the admin by invalidating the current token.
EndFragment

﻿

Authorization
Bearer Token
Token
<token>
Request Headers
Accept
application/json
Admin
StartFragment

These endpoints are designed for administrative users who have special privileges to manage the platform's content and users. Admins can register and log in using dedicated endpoints, and once authenticated, they can perform actions such as managing users, posts, and other admins.

EndFragment

﻿

GET
Retrieve Number of All Admins
http://127.0.0.1:8000/api/admin/count
StartFragment

Returns the total number of registered admins in the system
EndFragment

﻿

Authorization
Bearer Token
Token
<token>
Request Headers
Accept
application/json
Body
raw (json)
json
{
    
}
DELETE
Delete User
http://127.0.0.1:8000/api/admin/users/2
StartFragment

Allows an admin to delete a specific user from the system.
EndFragment

﻿

Authorization
Bearer Token
Token
<token>
Request Headers
Accept
application/json
Body
raw (json)
json
{
    
}
DELETE
Delete Admin
http://127.0.0.1:8000/api/admin/4
StartFragment

Allows an admin to delete another admin, provided they have the necessary privileges.
EndFragment

﻿

Authorization
Bearer Token
Token
<token>
Request Headers
Accept
application/json
Body
raw (json)
json
{
    
}
GET
Retrieve All Users
http://127.0.0.1:8000/api/admin/users
StartFragment

Retrieves a list of all users registered on the platform.
EndFragment

﻿

Authorization
Bearer Token
Token
<token>
Request Headers
Accept
application/json
Body
raw (json)
json
{
    
}
GET
Retrieve Number of Users
http://127.0.0.1:8000/api/admin/users/count
StartFragment

Returns the total number of registered users.
EndFragment

﻿

Authorization
Bearer Token
Token
<token>
Request Headers
Accept
application/json
Body
raw (json)
json
{
    
}
GET
Retrieve Single User
http://127.0.0.1:8000/api/admin/users/4
StartFragment

Retrieves details of a specific user using their unique ID.
EndFragment

﻿

Authorization
Bearer Token
Token
<token>
Request Headers
Accept
application/json
Body
raw (json)
json
{
    
}
GET
Retrieve All Posts
http://127.0.0.1:8000/api/admin/posts
StartFragment

Retrieves a list of all blog posts available on the platform.
EndFragment

﻿

Authorization
Bearer Token
Token
<token>
Request Headers
Accept
application/json
Body
raw (json)
json
{
    
}
GET
Retrieve Number of Posts
http://127.0.0.1:8000/api/admin/posts/count
StartFragment

Returns the total number of blog posts on the platform.
EndFragment

﻿

Authorization
Bearer Token
Token
<token>
Request Headers
Accept
application/json
Body
raw (json)
json
{
    
}
GET
Retrieve Single Post
http://127.0.0.1:8000/api/admin/posts/7
StartFragment

Retrieves a single blog post using its unique ID. (This may be redundant, similar to "Retrieve a Single Post" above.)

EndFragment

﻿

Authorization
Bearer Token
Token
<token>
Request Headers
Accept
application/json
Body
raw (json)
json
{
    
}
DELETE
Delete Single Post
http://127.0.0.1:8000/api/admin/posts/3
StartFragment

Deletes a single blog post by its ID, only accessible by the author or an admin.
EndFragment

﻿

Authorization
Bearer Token
Token
<token>
Request Headers
Accept
application/json
Body
raw (json)
json
{
    
}
