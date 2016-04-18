rsync \
	--delete \
	--exclude='.git/' \
	--exclude='sync.sh'  \
	--exclude='.settings/'  \
	--exclude='app/Plugin/AdminLTE/build'  \
	-raLve "ssh" . root@ec2-52-37-157-101.us-west-2.compute.amazonaws.com:/usr/share/arga-tracking-adminlte