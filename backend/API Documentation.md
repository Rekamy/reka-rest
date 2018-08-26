CRUD API
-------------------
for example module `user`

GET /users: list all users page by page;
HEAD /users: show the overview information of user listing;
POST /users: create a new user;
GET /users/123: return the details of the user 123;
HEAD /users/123: show the overview information of user 123;
PATCH /users/123 and PUT /users/123: update the user 123;
DELETE /users/123: delete the user 123;
OPTIONS /users: show the supported verbs regarding endpoint /users;
OPTIONS /users/123: show the supported verbs regarding endpoint /users/123

Auth API
-------------------

OPTIONS /base/auth/register: get required params;
POST /base/auth/register: register a new user;

OPTIONS /base/auth/login: get required params;
POST /base/auth/login: log user in;

OPTIONS /base/auth/logout: get required params;
POST /base/auth/logout: log user in;

Integration API
-------------------

GET /base/module: get white listed module;
GET /base/module/dev: get module list for developer only (developmemt only);
