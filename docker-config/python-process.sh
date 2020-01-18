#!/bin/sh
cd /var/www/html/literature-review/custom_python
exec python3.6 lr_process.py start localData & 
exec python3.6 lr_process.py start localValidation &

nohup php checkDataPullProc.php &
nohup php checkProcPullPubmed.php &
nohup php checkProcPullEmbase.php &
nohup php checkProcparseApiRequest.php &
nohup php checkProcglobalDriver.php &
