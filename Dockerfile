# Usa l'immagine ufficiale PHP CLI con versione 8.2
FROM php:8.2-cli

# Imposta la cartella di lavoro dentro il container
WORKDIR /app

# Copia tutti i file della tua repo nel container
COPY . /app

# Espone la porta 10000 (Render userà questa porta)
EXPOSE 10000

# Comando per far partire il server PHP integrato sulla porta 10000
CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]
