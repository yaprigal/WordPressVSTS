# Building WordPress using Azure DevOps and deploying to Azure App Service
Read my two articles about building custom WordPress solution and deploying it to Azure App Service at Azure Blogs <br> 
<a href='https://azure.microsoft.com/en-us/blog/deploying-wordpress-application-using-vsts-and-azure-part-one'>Part 1</a><br>
<a href='https://azure.microsoft.com/en-us/blog/deploying-wordpress-application-using-visual-studio-team-services-and-azure-part-two/'>Part 2</a><br>
<br>
## Solution Flow
![Screen capture](https://github.com/yaprigal/WordPressVSTS/blob/master/wordpress.png?raw=true)
## Run docker image
```
docker run  -e DB_ENV_HOST=[your mysql db url]:[your mysql port number]   -e DB_ENV_USER=[your mysql db user name]  -e DB_ENV_PASSWORD=[your mysql db password] -e DB_ENV_NAME=[your mysql database name] -p 5000:80  -d [your docker image name]
```
