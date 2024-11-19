# Hunt The Bug

#### Requirements
You must have docker installed, this can simply be installed using `apt install docker.io` for debian based operating systems or see https://docs.docker.com/get-docker/ for other distros and operating systems

##### Installation Instructions
`
docker build -t huntthebug .
`

`docker run -d -p 80:80 huntthebug`

#### Add the following entries to your /etc/hosts file

127.0.0.1          huntthebug.sec
127.0.0.1          www.huntthebug.sec
127.0.0.1          xss.huntthebug.sec
127.0.0.1          xss1.huntthebug.sec
127.0.0.1          xss2.huntthebug.sec
127.0.0.1          xss3.huntthebug.sec
127.0.0.1          xss4.huntthebug.sec
127.0.0.1          or1.huntthebug.sec
127.0.0.1          or2.huntthebug.sec
127.0.0.1          csrf.huntthebug.sec
127.0.0.1          idor.huntthebug.sec
127.0.0.1          lfi.huntthebug.sec
127.0.0.1          sqli.huntthebug.sec
127.0.0.1          sqli2.huntthebug.sec
127.0.0.1          ssrf.huntthebug.sec
127.0.0.1          ssrf2.huntthebug.sec
127.0.0.1          ssrf3.huntthebug.sec
127.0.0.1          ssrf4.huntthebug.sec
127.0.0.1          ssrf5.huntthebug.sec
127.0.0.1          ssrf6.huntthebug.sec
127.0.0.1          ssrf7.huntthebug.sec
127.0.0.1          xxe.huntthebug.sec
127.0.0.1          xxe2.huntthebug.sec
127.0.0.1          upload.huntthebug.sec
127.0.0.1          upload2.huntthebug.sec
127.0.0.1          rce.huntthebug.sec
127.0.0.1          rce2.huntthebug.sec
127.0.0.1          rce3.huntthebug.sec

Now you can visit http://www.huntthebug.sec in your browser to view the list of challenges

##### Thank you :)
