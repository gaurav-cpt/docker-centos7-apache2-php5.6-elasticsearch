FROM lr-centos7
MAINTAINER gaurav

RUN yum -y install git composer php56w php56w-cli php56w-common php56w-opcache php56w-mysql php56w-mbstring php56w-xml php56w-gd php56w-pear php56w-intl \
    && yum -y install php-drush-drush postfix tcping which

RUN yum -y install net-tools
RUN yum -y install tcpdump
RUN yum -y install php56w-pdo_mysql php56w-mysql-client
RUN yum -y install php56w-pdo_sqlite
RUN yum -y install php56w-mysqli
RUN yum -y install mysql mysql-server mysql-devel