#!/bin/sh

rsync \
    --delete \
    --exclude='.git*' \
    --exclude='.buildpath*' \
    --exclude='.externalToolBuilders*' \
    --exclude='.project*' \
    --exclude='.settings*' \
    --exclude="sync*" \
    --exclude='.settings/' \
	-raLve "ssh" . apache@beta-5.enviaflores.com:/var/www/sites/adminlte.enviaflores.com/