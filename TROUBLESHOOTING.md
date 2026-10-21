# Quick Quote Cart - Troubleshooting Guide

## 🔍 Common Issues & Solutions

### Issue 1: Cart Button Not Showing
**Symptoms**: No purple cart button visible on page

**Solutions**:
1. Clear browser cache and refresh
2. Check if JavaScript is enabled
3. Verify the code is in `home.blade.php`
4. Check browser console for errors (F12)

**Quick Fix**:
```bash
# Clear Laravel cache
php artisan cache:clear
php artisan view:clear
```

---

### Issue 2: Items Not Adding to Cart
**Symptoms**: Click "Add to Quote" but nothing happens

**Solutions**:
1. Check browser console for JavaScript errors
2. Verify localStorage is enabled in browser
3. Try in incognito/private mode
4. Check if equipment has valid ID

**Test**:
```javascript
// Open browser console (F12) and type:
localStorage.setItem('test', 'working');
console.log(localStorage.getItem('test'));
// Should show: "working"
```

---

### Issue 3: Cart Doesn't Persist After Refresh
**Symptoms**: Cart empties when page reloads

**Solutions**:
1. Check if browser is in private/incognito mode
2. Verify localStorage is not disabled
3. Check browser storage settings
4. Try different browser

**Check Storage**:
```javascript
// In browser console:
console.log(localStorage.getItem('quoteCart'));
// Should show cart data or null
```

---

### Issue 4: Badge Not Updating
**Symptoms**: Badge shows wrong count or doesn't appear

**Solutions**:
1. Refresh the page
2. Clear cart and add items again
3. Check browser console for errors
4. Verify `updateCartUI()` is being called

**Manual Fix**:
```javascript
// In browser console:
updateCartUI();
```

---

### Issue 5: WhatsApp Message Not Formatting
**Symptoms**: Message looks messy or broken

**Solutions**:
1. Check if special characters are properly encoded
2. Verify WhatsApp number is correct (2348086008207)
3. Test with fewer items first
4. Check if emojis are supported

**Test Message**:
```javascript
// In browser console:
sendQuoteToWhatsApp();
```

---

### Issue 6: Cart Panel Won't Open
**Symptoms**: Click cart button but panel doesn't show

**Solutions**:
1. Check if `hidden` class is being toggled
2. Verify z-index is high enough (z-40)
3. Check for CSS conflicts
4. Try clicking multiple times

**Manual Toggle**:
```javascript
// In browser console:
toggleQuoteCart();
```

---

### Issue 7: Quantities Not Changing
**Symptoms**: +/- buttons don't work

**Solutions**:
1. Check if `updateQuantity()` function exists
2. Verify item ID is correct
3. Check browser console for errors
4. Try removing and re-adding item

**Test**:
```javascript
// In browser console:
console.log(quoteCart);
// Should show array of items
```

---

### Issue 8: "Load from Cart" Not Working
**Symptoms**: Button doesn't populate form

**Solutions**:
1. Verify cart has items
2. Check if equipment names match exactly
3. Scroll to Quick Quote section manually
4. Check browser console for errors

**Manual Load**:
```javascript
// In browser console:
loadCartToForm();
```

---

### Issue 9: Dark Mode Issues
**Symptoms**: Cart looks wrong in dark mode

**Solutions**:
1. Check if dark mode classes are applied
2. Verify Tailwind dark: variants are working
3. Toggle dark mode on/off
4. Clear browser cache

**Test Dark Mode**:
```javascript
// In browser console:
document.documentElement.classList.toggle('dark');
```

---

### Issue 10: Mobile Display Problems
**Symptoms**: Cart looks broken on mobile

**Solutions**:
1. Check viewport meta tag is present
2. Verify responsive classes (w-96, max-h-[600px])
3. Test on actual device, not just browser resize
4. Check for CSS conflicts

**Mobile Test**:
- Open Chrome DevTools (F12)
- Click device toolbar icon
- Select mobile device
- Test all functions

---

## 🛠️ Developer Tools

### Check Cart Contents
```javascript
// In browser console:
console.log(JSON.parse(localStorage.getItem('quoteCart')));
```

### Clear Cart Manually
```javascript
// In browser console:
localStorage.removeItem('quoteCart');
location.reload();
```

### Reset Everything
```javascript
// In browser console:
localStorage.clear();
location.reload();
```

### Check All Functions
```javascript
// In browser console:
console.log(typeof addToQuote);        // Should be "function"
console.log(typeof updateCartUI);      // Should be "function"
console.log(typeof sendQuoteToWhatsApp); // Should be "function"
```

---

## 🔧 Laravel Commands

### Clear All Caches
```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan route:clear
```

### Restart Development Server
```bash
# Stop server (Ctrl+C)
php artisan serve
```

### Check for Errors
```bash
# View Laravel logs
tail -f storage/logs/laravel.log
```

---

## 📱 Browser Compatibility

### Supported Browsers
✅ Chrome 90+
✅ Firefox 88+
✅ Safari 14+
✅ Edge 90+
✅ Opera 76+

### Not Supported
❌ Internet Explorer (any version)
❌ Very old mobile browsers

### Check Browser Support
```javascript
// In browser console:
console.log('localStorage' in window);  // Should be true
console.log('JSON' in window);          // Should be true
```

---

## 🐛 Debug Mode

### Enable Detailed Logging
Add this to your JavaScript (temporary):

```javascript
// Add after quoteCart initialization
console.log('Cart initialized:', quoteCart);

// Modify addToQuote function to log
function addToQuote(name, price, id) {
    console.log('Adding to cart:', {name, price, id});
    // ... rest of function
}
```

### Watch Cart Changes
```javascript
// In browser console:
setInterval(() => {
    console.log('Current cart:', quoteCart);
}, 5000); // Logs every 5 seconds
```

---

## 📞 Still Having Issues?

### Checklist Before Asking for Help
- [ ] Cleared all caches
- [ ] Tested in different browser
- [ ] Checked browser console for errors
- [ ] Verified JavaScript is enabled
- [ ] Tested on different device
- [ ] Checked localStorage is working
- [ ] Reviewed implementation files

### Information to Provide
1. Browser name and version
2. Device type (desktop/mobile)
3. Error messages from console
4. Steps to reproduce the issue
5. Screenshot of the problem

---

## ✅ Quick Health Check

Run these in browser console to verify everything:

```javascript
// 1. Check cart exists
console.log('Cart:', quoteCart);

// 2. Check functions exist
console.log('Functions:', {
    addToQuote: typeof addToQuote,
    updateCartUI: typeof updateCartUI,
    sendQuoteToWhatsApp: typeof sendQuoteToWhatsApp
});

// 3. Check localStorage
console.log('Storage:', localStorage.getItem('quoteCart'));

// 4. Check DOM elements
console.log('Elements:', {
    widget: document.getElementById('quote-widget'),
    badge: document.getElementById('cart-badge'),
    cart: document.getElementById('quote-cart')
});
```

All should return valid values. If any is `null` or `undefined`, there's an issue.

---

**Last Updated**: January 2025
**Version**: 1.0
**Status**: Production Ready
