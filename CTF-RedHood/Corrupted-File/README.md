-DESCRIPTION:

    Vous avez un fichier corrompu. Vous devez le reparez et chercher
    dans le fichier pour trouvez le flag.
    
    
-INSTALLATION:

    Fichier Statique


-WRITE-UP:
    
    Utiliser un logiciel ou un editeur de texte pour modifier le header 
    du fichier. Voici le bon header:
    89 50 4E 47 0D 0A 1A 0A 00 00 00 0D 49 48 44 52 
    La valeur decoder est : ‰PNG........IHDR
    Une fois decodé, changer l'extention du fichier pour : .png
    Ouvrez l'image, puis changer la couleur du background.
    Vous devriez voir le flag.
    FLAG: 01253{MUAD'dib-PAUL-ATR}

