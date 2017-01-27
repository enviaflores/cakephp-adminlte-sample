rsync \
	--delete \
	--exclude='.git/' \
	--exclude='sync.sh'  \
	--exclude='.settings/'  \
	--exclude='app/Plugin/AdminLTE/build'  \
	-raLve "ssh" . apache@ec2-54-244-58-30.us-west-2.compute.amazonaws.com:/var/www/sites/adminlte.nosearch.net/