# php-vercel-run
Rodando PHP no site/host Vercel.app

Link video tutorial: https://www.youtube.com/watch?v=C_qvQo7PJMU
Link Repositório Runtime: https://github.com/vercel-community/php
Link arquivo vercel.json: (MEGA) https://mega.nz/file/5LAgVTCJ#4xy41RlpW6Ad243cJZqiz5cy08Y3sYUsBT7prSD86eI
Estrutura necessária: https://i.imgur.com/csaOlM1.png

# 

Comentário no vídeo tutorial:
@sandrojunior4276 há 4 dias
- "funciona sim, mas tem que colocar /api no final no link publico do vercel"

#

Estrutura do arquivo vercel.json:

{
    "functions": {
      "api/*.php": {
        "runtime": "vercel-php@0.4.0"
      }
    }
  }