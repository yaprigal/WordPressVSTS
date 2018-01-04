# WordPress VSTS CI/CD
This is a sample wordpress project that can be use in order to setup a VSTS CI/CD pipeline. <br><br>
Under 'html' folder – sample WordPress files. <br>
Under 'db' folder you will find initial db schema and data that you can use. <br><br>
You can build a new docker image using this Dockerfile and then docker run it using the following command: <br>
docker run  -e DB_ENV_HOST=[your mysql db url]:[your mysql port number]   -e DB_ENV_USER=[your mysql db user name]  -e DB_ENV_PASSWORD=[your mysql db password] -e DB_ENV_NAME=[your mysql database name] -p 5000:80  -d [your docker image name]
