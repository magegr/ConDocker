FROM mysql:8.0 

 

ENV MYSQL_ROOT_PASSWORD=contrasenyaRoot 

ENV MYSQL_DATABASE=cine 

ENV MYSQL_USER=usuario1 

ENV MYSQL_PASSWORD=contrasenyaUsuario1 

 

COPY init.sql /docker-entrypoint-initdb.d/ 

 

EXPOSE 3306 