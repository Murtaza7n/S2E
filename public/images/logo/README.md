# Logo Upload Instructions

## Current Logo
An SVG version of the S2E LOGISTICS logo has been created based on the design description.

## To Upload Your Actual Logo

1. **Supported Formats**: PNG, JPG, SVG
2. **Recommended Size**: 
   - For navigation bar: 200px width, 60px height (or proportional)
   - For login page: 300px width, 90px height (or proportional)

3. **Upload Steps**:
   ```bash
   # Upload your logo file to this directory
   # Rename it to: s2e-logo.png (or .jpg, .svg)
   # The system will automatically use it
   ```

4. **File Location**: `/var/www/S2E/public/images/logo/s2e-logo.png`

5. **Update the views** if you use a different filename:
   - Edit `resources/views/layouts/app.blade.php`
   - Edit `resources/views/auth/login.blade.php`
   - Change `s2e-logo.svg` to your filename

## Current Logo Files
- `s2e-logo.svg` - SVG version (scalable, recommended)

