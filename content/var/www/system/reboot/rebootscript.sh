#!/bin/bash
sudo /etc/init.d/lighttpd stop
sudo /etc/init.d/hdmimonitor stop
sudo /etc/init.d/xbmcmod stop
sudo /etc/init.d/nzbget stop
sudo /etc/init.d/sickbeard stop
sudo /etc/init.d/couchpotato stop
sudo /etc/init.d/autosub stop

sudo reboot

exit 0
