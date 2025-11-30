# ✅ InfinityFree Deployment Checklist

## Account Info
- **Account ID**: if0_40555982
- **Username**: if0_40555982

## Pre-Upload Checklist

- [ ] Run `prepare-for-infinityfree.bat` to optimize project
- [ ] Verify `vendor/` folder exists and is complete
- [ ] Check `.htaccess` file exists in root
- [ ] Check `public/.htaccess` file exists
- [ ] Prepare `.env` content from `.env.production`

## Upload Checklist

- [ ] Login to InfinityFree cPanel
- [ ] Open File Manager
- [ ] Navigate to `htdocs/` folder
- [ ] Upload all Laravel files to `htdocs/`
- [ ] Verify folder structure is correct

## Post-Upload Checklist

- [ ] Set `storage/` folder permission to 755
- [ ] Set `bootstrap/cache/` folder permission to 755
- [ ] Create `.env` file in `htdocs/`
- [ ] Copy content from `.env.production` to `.env`
- [ ] Update `APP_URL` in `.env` with your domain
- [ ] Test website in browser

## Files to Upload

### ✅ Folders (MUST upload):
- [ ] `app/`
- [ ] `bootstrap/`
- [ ] `config/`
- [ ] `database/`
- [ ] `public/`
- [ ] `resources/`
- [ ] `routes/`
- [ ] `storage/`
- [ ] `vendor/` ⚠️ VERY IMPORTANT!

### ✅ Files (MUST upload):
- [ ] `.htaccess`
- [ ] `artisan`
- [ ] `composer.json`
- [ ] `composer.lock`
- [ ] `server.php`

### ❌ DO NOT Upload:
- [ ] `.git/` folder
- [ ] `node_modules/` folder
- [ ] `.env` (create manually on server)
- [ ] `tests/` folder
- [ ] `README.md`
- [ ] `*.bat` files

## Testing Checklist

- [ ] Homepage loads: `http://your-domain.infinityfreeapp.com/`
- [ ] About page works: `/about`
- [ ] Services page works: `/services`
- [ ] Skills page works: `/skills`
- [ ] Education page works: `/education`
- [ ] Experience page works: `/experience`
- [ ] Work page works: `/work`
- [ ] Blog page works: `/blog`
- [ ] Contact page works: `/contact`
- [ ] CSS styles loading correctly
- [ ] Images loading correctly
- [ ] Navigation working

## Common Issues & Solutions

### ❌ 500 Internal Server Error
- Check `.htaccess` files exist
- Check folder permissions (755)
- Check `.env` file created
- Check error logs in cPanel

### ❌ Blank page
- Check `vendor/` folder uploaded
- Check `.env` file exists
- Set `APP_DEBUG=true` temporarily to see errors

### ❌ CSS/JS not loading
- Check `public/css/` and `public/js/` uploaded
- Update `APP_URL` in `.env`
- Clear browser cache (Ctrl + F5)

### ❌ "No input file specified"
- Check `.htaccess` in root exists
- Check `public/.htaccess` exists
- Verify `public/index.php` exists

## 🎉 Success!

When all checkboxes are checked and website is working:
- [ ] Website is live and accessible
- [ ] All pages working correctly
- [ ] Styles and images loading
- [ ] No errors in browser console

---
**Your Domain**: http://if0-40555982.infinityfreeapp.com (or your custom domain)
**Account**: if0_40555982
