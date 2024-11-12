# Usamos una imagen base de Ubuntu
FROM ubuntu:16.04

# Instalación de dependencias
RUN apt-get update && apt-get install -y \
    vsftpd=2.3.4-1ubuntu1 \
    && rm -rf /var/lib/apt/lists/*

# Crear un directorio para los usuarios de FTP
RUN mkdir -p /home/ftpusers

# Crear un archivo de configuración para vsftpd
RUN echo "listen=YES" > /etc/vsftpd.conf \
    && echo "listen_ipv6=NO" >> /etc/vsftpd.conf \
    && echo "anonymous_enable=NO" >> /etc/vsftpd.conf \
    && echo "local_enable=YES" >> /etc/vsftpd.conf \
    && echo "write_enable=YES" >> /etc/vsftpd.conf \
    && echo "chroot_local_user=YES" >> /etc/vsftpd.conf \
    && echo "user_sub_token=$USER" >> /etc/vsftpd.conf \
    && echo "local_root=/home/ftpusers/$USER" >> /etc/vsftpd.conf \
    && echo "ftpd_banner=Welcome to my FTP server" >> /etc/vsftpd.conf \
    && echo "log_ftp_protocol=YES" >> /etc/vsftpd.conf \
    && echo "userlist_enable=YES" >> /etc/vsftpd.conf \
    && echo "userlist_deny=NO" >> /etc/vsftpd.conf \
    && echo "xferlog_enable=YES" >> /etc/vsftpd.conf \
    && echo "xferlog_file=/var/log/xferlog" >> /etc/vsftpd.conf \
    && echo "xferlog_std_format=YES" >> /etc/vsftpd.conf

# Crear usuarios para la enumeración
RUN useradd -m user1 && echo "user1:password" | chpasswd
RUN useradd -m user2 && echo "user2:password" | chpasswd
RUN useradd -m user3 && echo "user3:password" | chpasswd

# Exponer el puerto 21 para FTP
EXPOSE 21

# Iniciar el servicio FTP
CMD ["vsftpd", "/etc/vsftpd.conf"]

#docker build -t vsftpd-vulnerable .
#docker run -d -p 21:21 --name ftp-server vsftpd-vulnerable


#hydra -L users.txt -P /usr/share/wordlists/rockyou.txt ftp://<docker-host>:21
