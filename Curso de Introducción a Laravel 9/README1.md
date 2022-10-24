# Error de firmware en MacOS X Yosemite (Solution with sdcard)

## Virtual Box:
- Versión 6.1.40 r154048 (Qt5.6.3)
- Oracle_VM_VirtualBox_Extension_Pack-6.1.40.vbox-extpack
- Controlador: SATA (añadir disco duro y Usar cache de I/O anfitrión)

```
# Home
cd $HOME
# Revisar puertos
mount
# Desmontar disco correctamente
diskutil unmountdisk /dev/disk2s1
# Crear vmdk (en caso de error probar con otro nombre.vmdk en el archivo que apunta a la sdcard, y su repectivo disk#s#)
sudo VBoxManage internalcommands createrawvmdk -filename sdcard.vmdk -rawdisk /dev/disk2s1
# Nombre correspondiente vmdk
sudo chmod 666 sdcard.vmdk
# Permisos correspondientes al puerto
sudo chmod 777 /dev/disk2s1
```

- **Instalar Big Sur (*.iso) en la máquina virtual**.
- **Descargar Big Sur desde :https://support.apple.com/es-lamr/HT211683**
- **Arrancar el SO con Big Sur, con su sdcard leída, y Big Sur (aplicación oficial) descargada**.
- **Usar terminal: https://www.youtube.com/watch?v=euVx5oJxI6I**
- **Arrancar el booteable como indica en el video**.
Ejemplo: `sudo /Applications/Install\ macOS\ Catalina.app/Contents/Resources/createinstallmedia --volume /Volumes/UNTITLED`
- **Dar formato al disco: Mapa de particiones GUID**
- **Instalar**

Referencias:
https://www.geekytidbits.com/mount-sd-card-virtualbox-from-mac-osx/
https://kellner.io/sdcard-virtualbox-on-maco.html