# WordPress VSTS CI/CD
This is sample wordpress project. <br>
Under db folder you will find initial db schema and data that you can use
you can run this wordpress docker image by running:
docker run  -e WORDPRESS_DB_HOST=[your mysql db url]:[your mysql port number]   -e WORDPRESS_DB_USER=[your mysql db user name]  -e WORDPRESS_DB_PASSWORD=[your mysql db password] -e WORDPRESS_DB_NAME=[your mysql database name] -p 5000:80  -d [your docker image name]
