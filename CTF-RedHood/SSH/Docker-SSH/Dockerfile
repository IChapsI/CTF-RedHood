# Utiliser une image de base officielle Ubuntu
FROM ubuntu:latest

# Mettre à jour le système et installer le serveur SSH
RUN apt-get update && apt-get install -y openssh-server

# Créer le répertoire pour le serveur SSH
RUN mkdir /var/run/sshd

# Modifier le fichier de configuration SSH
RUN echo 'Port 22' >> /etc/ssh/sshd_config
RUN echo 'PermitRootLogin prohibit-password' >> /etc/ssh/sshd_config
RUN echo 'PasswordAuthentication yes' >> /etc/ssh/sshd_config
RUN echo 'AllowUsers user01' >> /etc/ssh/sshd_config
RUN echo 'Match User user01' >> /etc/ssh/sshd_config
RUN echo 'ForceCommand echo "Welcome user01! Your flag is 01253{nanobetterthanvim} ;)"' >> /etc/ssh/sshd_config

# Ajouter l'utilisateur 'user01' avec le mot de passe 'superman'
RUN useradd -m -p $(openssl passwd -1 superman) user01

# Exposer le port SSH
EXPOSE 22

# Démarrer le serveur SSH au démarrage du conteneur
CMD ["/usr/sbin/sshd", "-D"]

