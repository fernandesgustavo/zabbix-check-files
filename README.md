# Monitor files in the directory

Script to monitor files of any extension in a directory, and can also check the creation date.

# Requirements

- Check if PHP is installed on the server;

- Add the keys to your Zabbix "UserParameter" file;

    UserParameter=file.status[*],php c:\zabbix\scripts\file-check.php $1 $2 $3

    UserParameter=file.history[*],php c:\zabbix\scripts\file-history.php $1 $2 $3

- Create a folder and copy the scripts;

- Restart the zabbix agent;

# Usage

- Checks for ".TXT" files with creation date greater than 3600 seconds - (Returns 0 or 1)

    **file.status[c:\users\gustavo\test\, TXT, 3600]**

- Checks for ".TXT" files with creation date greater than 3600 seconds - (Returns the list of files)

    **file.history[c:\users\gustavo\test\, TXT, 3600]**
    
- Checks for ".LOG" files with creation date greater than 0 seconds (any file) - (Returns 0 or 1)

    **file.status[c:\users\gustavo\test\, LOG, 0]**

- Checks for ".LOG" files with creation date greater than 0 seconds (any file) - (Returns the list of files)

    **file.history[c:\users\gustavo\test\, LOG, 0]**