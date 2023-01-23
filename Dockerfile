FROM ubuntu:20.04

RUN apt update && \
    apt install -y software-properties-common && \
    LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php && \
    apt update && \
    apt install -y php8.0

RUN apt install -y curl iputils-ping procps vim tree
