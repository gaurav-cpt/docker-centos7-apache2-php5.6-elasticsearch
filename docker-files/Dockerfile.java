FROM openjdk:8
MAINTAINER sohan

RUN java -version
ADD custom_java/boilerpipe-web-service /home/
WORKDIR /home
RUN ./mvnw install
CMD ./mvnw spring-boot:run