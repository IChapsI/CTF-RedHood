-DESCRITPION:

    Connecter vous avec ses informations a un serveur ssh.
    Un dossier secret est présent dans le système, trouvez
    le et décodez le flag.

    Username: johngrammaticus
    Password: cabal
    

-INSTALLATION:
  
    DOCKER


-WRITE-UP:

    Se connecter en ssh;
    ssh johngrammaticus@<ip de la machine>
    password : cabal

    Entrez cette commande pour devenir root : sudo find /home -exec /bin/bash \;
    
    Se rendre dans le dossier /etc;
    cd /etc
   
    Fouillez dans le dossier pour voir les fichiers cachés;
    ls -a -l

    Trouver le fichier .noflaghere

    Fouillez dans les fichiers , prennez le fihcier "millenium", traduisez le en base64,
    puis prenez la fin des premiers paragraphes et regrouper les dans un fichier puis 
    traduisez le encore en base 64 puis en binaire et vous aurez le flag. base64.

    FLAG: 01253{hopeyoureadallmydocsbutiknowyoudidnt}
