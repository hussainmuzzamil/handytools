#!/bin/bash
 
### Settings
svn_wk='/srv/tftp/data/'
svn_user='user'
svn_passwd='passwd'
 
### Variables
date=`date +"%F %T"`
svn='/usr/bin/svn'
 

#### Start automatic commit
script_path=`dirname $(readlink -f $0)`
log="${script_path}/commit.log"
cd $svn_wk
stat=`svn status`

if [[ $stat != '' ]]; then
        # Do we have any files to delete?
        delete_files=`echo $stat|grep '^\!'|sed 's/\! / /g'`
        if [[ $delete_files != '' ]]; then
                for file in $delete_files; do
                        svn delete $file >>$log
                done
        fi

        # Do we have any files to add?
        add_files=`echo $stat|grep '^\?'|sed 's/\? / /g'`
        if [[ $add_files != '' ]]; then
                for file in $add_files; do
                        svn add $file >>$log
                done
        fi
        #Checkout first
        svn update #>/dev/null 2>>/dev/null
        # Finaly commit
        $svn commit -m "$date - Automatic Update/Commit" --username $svn_user --password $svn_passwd --non-interactive >>$log
fi