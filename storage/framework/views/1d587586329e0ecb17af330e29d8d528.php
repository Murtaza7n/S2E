
<footer class="footer-global mt-auto" style="background: linear-gradient(135deg, #1E3A5F 0%, #152A47 100%); border-top: 3px solid #FF6B35;">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-6">
            <!-- Company Info -->
            <div class="flex flex-col">
                <div class="flex items-center space-x-3 mb-4">
                    <img src="<?php echo e(asset('images/logo/s2e-logo.svg')); ?>" alt="S2E Logistics" class="h-10 w-auto">
                    <div>
                        <p class="text-lg font-bold" style="color: #FF6B35;">S2E LOGISTICS</p>
                        <p class="text-xs" style="color: #E5E7EB;">Delivering Trust, Start to End</p>
                    </div>
                </div>
                <p class="text-sm leading-relaxed" style="color: #E5E7EB; opacity: 0.9;">
                    Your trusted partner in logistics and supply chain management.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-sm font-semibold mb-4 uppercase tracking-wider" style="color: #FF6B35;">Quick Links</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="<?php echo e(route('dashboard')); ?>" class="text-sm hover:underline transition-colors" style="color: #E5E7EB;">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('s2e.cn-entry.index')); ?>" class="text-sm hover:underline transition-colors" style="color: #E5E7EB;">
                            CN Entry
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('finance.chart-of-accounts.index')); ?>" class="text-sm hover:underline transition-colors" style="color: #E5E7EB;">
                            Finance
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('settings.users.index')); ?>" class="text-sm hover:underline transition-colors" style="color: #E5E7EB;">
                            Settings
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Social Media -->
            <div>
                <h3 class="text-sm font-semibold mb-4 uppercase tracking-wider" style="color: #FF6B35;">Follow Us</h3>
                <div class="flex items-center space-x-3">
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/s2elogistics" target="_blank" rel="noopener noreferrer" 
                       class="social-icon facebook" title="Facebook"
                       style="width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; background-color: #1877F2; transition: all 0.3s ease; box-shadow: 0 2px 4px rgba(0,0,0,0.2);">
                        <svg width="20" height="20" fill="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/s2elogistics" target="_blank" rel="noopener noreferrer" 
                       class="social-icon instagram" title="Instagram"
                       style="width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); transition: all 0.3s ease; box-shadow: 0 2px 4px rgba(0,0,0,0.2);">
                        <svg width="20" height="20" fill="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>

                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/company/s2elogistics" target="_blank" rel="noopener noreferrer" 
                       class="social-icon linkedin" title="LinkedIn"
                       style="width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; background-color: #0077B5; transition: all 0.3s ease; box-shadow: 0 2px 4px rgba(0,0,0,0.2);">
                        <svg width="20" height="20" fill="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>

                    <!-- YouTube -->
                    <a href="https://www.youtube.com/@s2elogistics" target="_blank" rel="noopener noreferrer" 
                       class="social-icon youtube" title="YouTube"
                       style="width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; background-color: #FF0000; transition: all 0.3s ease; box-shadow: 0 2px 4px rgba(0,0,0,0.2);">
                        <svg width="20" height="20" fill="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>

                    <!-- X (Twitter) -->
                    <a href="https://twitter.com/s2elogistics" target="_blank" rel="noopener noreferrer" 
                       class="social-icon twitter" title="X (Twitter)"
                       style="width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; background-color: #000000; transition: all 0.3s ease; box-shadow: 0 2px 4px rgba(0,0,0,0.2);">
                        <svg width="20" height="20" fill="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/923001234567" target="_blank" rel="noopener noreferrer" 
                       class="social-icon whatsapp" title="WhatsApp"
                       style="width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; background-color: #25D366; transition: all 0.3s ease; box-shadow: 0 2px 4px rgba(0,0,0,0.2);">
                        <svg width="20" height="20" fill="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Copyright Section -->
        <div class="border-t pt-6" style="border-color: rgba(255, 107, 53, 0.3);">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-2 md:space-y-0">
                <p class="text-sm font-medium" style="color: #E5E7EB;">
                    &copy; <?php echo e(date('Y')); ?> <strong style="color: #FF6B35;">S2E Logistics</strong>. All rights reserved.
                </p>
                <p class="text-xs" style="color: #E5E7EB; opacity: 0.8;">
                    Powered by S2E Logistics ERP System
                </p>
            </div>
        </div>
    </div>
</footer>

<style>
    /* Footer Styles */
    .footer-global {
        position: relative;
        z-index: 10;
    }

    /* Social Icon Hover Effects */
    .social-icon {
        position: relative;
    }
    
    .social-icon:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 4px 8px rgba(0,0,0,0.3) !important;
    }

    .social-icon:active {
        transform: translateY(-1px) scale(1.02);
    }
    
    .social-icon::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        transform: translate(-50%, -50%);
        transition: width 0.3s ease, height 0.3s ease;
    }
    
    .social-icon:hover::after {
        width: 100%;
        height: 100%;
    }

    /* Responsive Footer */
    @media (max-width: 768px) {
        .footer-global {
            padding: 2rem 1rem !important;
        }
        
        .footer-global .grid {
            grid-template-columns: 1fr;
            gap: 2rem;
            text-align: center;
        }
        
        .social-icon {
            width: 36px !important;
            height: 36px !important;
        }
        
        .social-icon svg {
            width: 18px !important;
            height: 18px !important;
        }
    }

    /* Print Styles - Hide Footer */
    @media print {
        .footer-global {
            display: none !important;
        }
    }
</style>
<?php /**PATH /var/www/S2E/resources/views/components/footer.blade.php ENDPATH**/ ?>