FROM ubuntu:latest

# Installation des packages nécessaires
RUN apt-get update && apt-get install -y openssh-server sudo

# Ajout de l'utilisateur "johngrammaticus" avec le mot de passe "cabal"
RUN useradd -m -d /home/johngrammaticus -s /bin/bash johngrammaticus && \
    echo 'johngrammaticus:cabal' | chpasswd

# Activation de SSH
RUN mkdir /var/run/sshd && \
    sed -i 's/#PermitRootLogin prohibit-password/PermitRootLogin yes/' /etc/ssh/sshd_config

# Ajout de la ligne au fichier /etc/sudoers.d
RUN echo 'johngrammaticus     ALL=(root) NOPASSWD: /usr/bin/find' > /etc/sudoers.d/johngrammaticus

# Copie et renommage du fichier noflaghere
COPY noflaghere /etc/.noflaghere

# Définition des permissions pour le fichier .noflaghere
RUN chown root:root /etc/.noflaghere && \
    chmod 600 /etc/.noflaghere

# Exposition du port 22 pour SSH
EXPOSE 22

# Point d'entrée pour démarrer le service SSH
CMD ["/usr/sbin/sshd", "-D"]

