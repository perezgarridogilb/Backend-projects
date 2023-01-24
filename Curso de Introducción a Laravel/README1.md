# Xdebugger installation

## php.ini

- Location `/usr/local/etc/php/7.3/php.ini`

```
...
; Local Variables:
; tab-width: 4
; End:
xdebug.remote_enable = 1
xdebug.remote_autostart = 1
xdebug.remote_port = 9000
```

## 99-xdebug.ini

- Location `/usr/local/etc/php/7.3/conf.d/99-xdebug.ini`

```
zend_extension = "/usr/lib/php/extensions/no-debug-non-zts-20180731/xdebug.so"
xdebug.mode=debug
xdebug.start_with_request = yes
xdebug.remote_autostart = 1
```

## Visual Studio Code
These three files are the most important to modify (with nano, vim, etc.)
### settings.json

```
{
    // Use IntelliSense to learn about possible attributes.
    // Hover to view descriptions of existing attributes.
    // For more information, visit: https://go.microsoft.com/fwlink/?linkid=830387
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for Xdebug",
            "type": "php",
            "request": "launch",
            "port": 9000
        },
        {
            "name": "Launch currently open script",
            "type": "php",
            "request": "launch",
            "program": "${file}",
            "cwd": "${fileDirname}",
            "port": 9000
        }
    ]
}
```