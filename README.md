# php-vercel-run (03/03/24)
- Rodando PHP no site/host Vercel.app

- Link video tutorial: https://www.youtube.com/watch?v=C_qvQo7PJMU

VER no Repositório Runtime link, SE O Arquivo vercel.json, se o RUNTIME VERSÃO MUDOU/ ERA "runtime": "vercel-php@0.7.0"  
- Link Repositório Runtime: https://github.com/vercel-community/php
Caso tenha mudado atualizar no meu arquivo "vercel.json"

- Link arquivo vercel.json: (MEGA) https://mega.nz/file/5LAgVTCJ#4xy41RlpW6Ad243cJZqiz5cy08Y3sYUsBT7prSD86eI
- Estrutura necessária: https://i.imgur.com/csaOlM1.png

# 

- Comentário no vídeo tutorial:
- @sandrojunior4276 há 4 dias
- "funciona sim, mas tem que colocar /api no final no link publico do vercel"
- OBS: Isso não mudou muita coisa no site não.

#

- Estrutura do arquivo vercel.json:

```
{
  "functions": {
    "api/*.php": {
      "runtime": "vercel-php@0.7.0"
    }
  }
}
```
- Link do site na Vercel.app: https://php-vercel-run.vercel.app/
- Link do projeto na Vercel: https://vercel.com/cybertechnet-hotmailcom/php-vercel-run
