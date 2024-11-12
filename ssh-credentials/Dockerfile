FROM ubuntu:20.04
RUN apt-get update && apt-get install -y openssh-server
RUN echo 'root:123456' | chpasswd
RUN mkdir /var/run/sshd
CMD ["/usr/sbin/sshd", "-D"]
EXPOSE 22
#docker build -t vulnerable-ssh .
#docker run -d -p 2222:22 vulnerable-ssh

#explotar con
#hydra -l root -p 123456 ssh://<docker-host>:2222
