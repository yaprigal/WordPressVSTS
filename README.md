# WordPress VSTS CI/CD
Read more at Azure Blogs - https://azure.microsoft.com/en-us/blog/deploying-wordpress-application-using-vsts-and-azure-part-one/ <br><br>
<br><br>
<B>Run docker image</B>
You can build a new docker image using this Dockerfile and then docker run it using the following command: <br>
docker run  -e DB_ENV_HOST=[your mysql db url]:[your mysql port number]   -e DB_ENV_USER=[your mysql db user name]  -e DB_ENV_PASSWORD=[your mysql db password] -e DB_ENV_NAME=[your mysql database name] -p 5000:80  -d [your docker image name]
