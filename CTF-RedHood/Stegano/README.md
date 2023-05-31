-DESCRIPTION:

    Dans ce dossier il y a des images qui contiennent des
    messages secrets, trouvez un moyen de sortir les
    messages des images. Il faudra utiliser ceci : nothere


-INSTALLATION:
    
    Fichier Statique


-WRITE-UP:
    
    Utiliser steghide comme ceci;
    steghide extract -sf waw.jpg
    passphrase: nothere

    Utiliser l'url comme ceci;
    steghide extract -sf ad.jpg
    passphrase: https://www.youtube.com/watch?v=dQw4w9WgXcQ

    Vous pouvez ensuite lire le fichier qui contiendra le flag.
    FLAG: 01253{avouequetaperdutontempsananolesimages}
