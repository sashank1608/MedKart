## READ THIS FOR CLARITY
#### DIRECTORIES:
1. root -> contains the presentation files. 
2. php -> contains logical php code
3. others -> css, js, fonts etc. Bootstrap related content -> can be pushed via CDN too to make server faster.

#### FILES:
1. login.php -> login page for both users and consumers
2. register.php -> Registration page for users only
3. vendor_register.php -> Registration page for consumers only
4. index.html -> Landing page for the webapp
5. php/dbconnect.php -> creates a database connection. Database parameters are set in this file. The caller must close the db connection.
6. php/handle_login.php -> handles login for consumer
7. php/handle_vendor_login.php -> handles login for vendor
8. php/message.php -> prints a cleanly formatted error or success message above the site content
9. php/login_redirect.php -> redirects the user to home page if they are already logged in. (inclusion pending)
10. home.php -> (Bare bones is implemented by varshith for testing) user home page to be implemented by Harsh Pritam.

#### NOTE:
session_start() must be called at the top of every page for the page to be able to access $_SESSION Variables.