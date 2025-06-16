# Configurações de Deploy - Devocional Digital

## Plataformas Recomendadas para Laravel

### 1. Railway (Recomendado) ⭐
- Acesse: https://railway.app
- Conecte GitHub
- Deploy from GitHub repo
- Selecione: devocional-digital
- Configuração automática via `railway.json`

### 2. Render
- Acesse: https://render.com
- New Web Service
- Connect GitHub
- Build Command: `composer install --no-dev --optimize-autoloader && php artisan config:cache && php artisan route:cache && php artisan view:cache`
- Start Command: `vendor/bin/heroku-php-apache2 public/`
- Environment: Production

### 3. Heroku
```bash
# Instalar Heroku CLI
curl https://cli-assets.heroku.com/install.sh | sh

# Login e deploy
heroku login
heroku create devocional-digital-app
git push heroku main
```

### 4. DigitalOcean App Platform
- Acesse: https://cloud.digitalocean.com/apps
- Create App
- GitHub source
- Detecta Laravel automaticamente

## Variáveis de Ambiente Necessárias

```env
APP_NAME="Devocional Digital"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://seu-dominio.com
APP_TIMEZONE=America/Sao_Paulo
APP_LOCALE=pt_BR
DB_CONNECTION=sqlite
```

## Comandos Pós-Deploy

```bash
php artisan key:generate
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Por que não Vercel?

O Vercel é otimizado para:
- React, Vue, Next.js, Nuxt.js
- Sites estáticos
- Serverless functions

Laravel precisa de:
- Servidor PHP persistente
- Sistema de arquivos gravável
- Banco de dados persistente
- Processamento de sessões

## Status Atual
✅ Projeto Laravel configurado
✅ Landing page responsiva
✅ Página de checkout
✅ Configurações de deploy prontas
✅ Repositório no GitHub 