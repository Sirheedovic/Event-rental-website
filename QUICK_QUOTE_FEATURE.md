# Quick Quote Cart Feature

## Overview
The Quick Quote Cart is an interactive shopping cart system that allows users to add multiple equipment items before sending a consolidated quote request via WhatsApp.

## Features

### 1. **Add to Quote Button**
- Replaces the individual "Book via WhatsApp" buttons on equipment cards
- Instantly adds items to the cart with visual feedback
- Shows a success notification when items are added

### 2. **Floating Cart Widget**
- **Location**: Bottom-right corner (above WhatsApp button)
- **Badge**: Shows total item count with bounce animation
- **Color**: Purple/Pink gradient to match brand
- **Responsive**: Works on mobile and desktop

### 3. **Cart Management**
- **View Items**: Click cart button to open/close panel
- **Adjust Quantities**: Use +/- buttons to change quantities
- **Remove Items**: Delete icon to remove individual items
- **Persistent Storage**: Cart saved in localStorage (survives page refresh)
- **Real-time Total**: Shows daily rental cost total

### 4. **WhatsApp Integration**
- **Direct Send**: Click "Send to WhatsApp" in cart
- **Formatted Message**: Professional quote request with:
  - All selected equipment with quantities
  - Individual and total pricing
  - Clean, emoji-enhanced formatting
- **Load to Form**: "Load from Cart" button in Quick Quote section
  - Auto-populates the detailed form with cart items
  - Smooth scroll to form section

## User Flow

```
Browse Equipment → Click "Add to Quote" → Items Added to Cart
                                              ↓
                                    View Cart (Badge shows count)
                                              ↓
                                    Adjust Quantities/Remove Items
                                              ↓
                                    Option 1: Send Directly via WhatsApp
                                    Option 2: Load to Detailed Form
```

## Technical Implementation

### JavaScript Functions
- `addToQuote(name, price, id)` - Adds item to cart
- `removeFromQuote(id)` - Removes item from cart
- `updateQuantity(id, change)` - Adjusts item quantity
- `updateCartUI()` - Refreshes cart display
- `toggleQuoteCart()` - Opens/closes cart panel
- `sendQuoteToWhatsApp()` - Generates and sends WhatsApp message
- `loadCartToForm()` - Populates Quick Quote form with cart items
- `showNotification(text)` - Shows success messages

### Data Storage
- Uses `localStorage` with key `quoteCart`
- Data structure: `[{id, name, price, quantity}, ...]`
- Persists across page reloads

### Styling
- Tailwind CSS for responsive design
- Custom animations for notifications
- Dark mode compatible
- Mobile-optimized layout

## Benefits

### For Customers
✅ Browse and compare multiple items before contacting
✅ See total cost estimate upfront
✅ Edit selections easily
✅ One WhatsApp message for entire quote
✅ No need to message multiple times

### For Business
✅ Better qualified leads (customers know what they want)
✅ Reduced back-and-forth messaging
✅ Professional presentation
✅ Higher conversion rates
✅ Clear pricing transparency

## Browser Compatibility
- Modern browsers (Chrome, Firefox, Safari, Edge)
- Requires JavaScript enabled
- localStorage support required

## Future Enhancements
- Add date selection to cart
- Save multiple carts (named quotes)
- Email quote option
- Print quote functionality
- Share quote link feature
