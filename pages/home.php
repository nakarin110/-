<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>ร้านค้าออนไลน์ - Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        body {
            background: #fafbfc;
        }
        
        .gradient-accent {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }
        
        .btn-modern {
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        .btn-modern:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.2);
        }
        
        .hero-banner {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
        }
        
        .hero-banner::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }
        
        .sidebar-nav a {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .sidebar-nav a:hover {
            transform: translateX(4px);
            color: #667eea;
        }
        
        .product-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            background: #ef4444;
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="flex h-screen bg-gray-50">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r border-gray-200 flex flex-col fixed h-full">
            <div class="p-6 border-b border-gray-100">
                <h1 class="text-2xl font-bold text-gray-900">
                    <i class="fas fa-shopping-bag text-purple-600 mr-2"></i>MyStore
                </h1>
                <p class="text-xs text-gray-500 mt-1">ร้านค้าออนไลน์คุณภาพ</p>
            </div>
            
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="#" class="flex items-center px-4 py-3 bg-purple-50 text-purple-600 rounded-lg font-medium sidebar-nav">
                    <i class="fas fa-home w-5 mr-3"></i>
                    <span>หน้าหลัก</span>
                </a>
                
                <div class="pt-4 border-t border-gray-100">
                    <p class="text-xs font-semibold text-gray-400 uppercase px-4 mb-3">หมวดหมู่</p>
                    <div class="overflow-y-auto max-h-48">
                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:text-purple-600 sidebar-nav">
                            <i class="fas fa-shoe-prints w-5 mr-3"></i>
                            <span>รองเท้า</span>
                        </a>

                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:text-purple-600 sidebar-nav">
                            <i class="fas fa-headphones w-5 mr-3"></i>
                            <span>เครื่องใช้ไฟฟ้า</span>
                        </a>

                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:text-purple-600 sidebar-nav">
                            <i class="fas fa-clock w-5 mr-3"></i>
                            <span>นาฬิกา</span>
                        </a>

                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:text-purple-600 sidebar-nav">
                            <i class="fas fa-backpack w-5 mr-3"></i>
                            <span>กระเป๋า</span>
                        </a>

                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:text-purple-600 sidebar-nav">
                            <i class="fas fa-shirt w-5 mr-3"></i>
                            <span>เสื้อผ้า</span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:text-purple-600 sidebar-nav">
                            <i class="fas fa-car w-5 mr-3"></i>
                            <span>ยานยนต์</span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:text-purple-600 sidebar-nav">
                            <i class="fas fa-book w-5 mr-3"></i>
                            <span>หนังสือ</span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:text-purple-600 sidebar-nav">
                            <i class="fas fa-gamepad w-5 mr-3"></i>
                            <span>เกม</span>
                        </a>
                    </div>
                </div>
                
                <div class="pt-4 border-t border-gray-100">
                    <p class="text-xs font-semibold text-gray-400 uppercase px-4 mb-3">อื่นๆ</p>
                    
                    <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:text-purple-600 sidebar-nav">
                        <i class="fas fa-star w-5 mr-3"></i>
                        <span>สินค้าเด่น</span>
                    </a>
                    
                    <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:text-purple-600 sidebar-nav">
                        <i class="fas fa-tag w-5 mr-3"></i>
                        <span>โปรโมชั่น</span>
                        <span class="ml-auto bg-red-500 text-white text-xs font-bold rounded-full px-2 py-0.5">3</span>
                    </a>
                </div>
            </nav>
            
            <!-- Footer in Sidebar -->
            <div class="p-4 border-t border-gray-100 space-y-4">
                <a href="#" class="flex items-center px-3 py-2 bg-gray-50 rounded-lg text-gray-700 text-sm hover:bg-gray-100 transition">
                    <i class="fas fa-phone w-4 mr-2"></i>
                    <span>ติดต่อเรา</span>
                </a>
                
                <a href="#" class="flex items-center px-3 py-2 bg-gray-50 rounded-lg text-gray-700 text-sm hover:bg-gray-100 transition">
                    <i class="fas fa-info-circle w-4 mr-2"></i>
                    <span>เกี่ยวกับเรา</span>
                </a>
                
                <div class="flex gap-2 pt-2">
                    <a href="#" class="flex-1 flex items-center justify-center bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700 transition text-sm">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="flex-1 flex items-center justify-center bg-pink-600 text-white p-2 rounded-lg hover:bg-pink-700 transition text-sm">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="flex-1 flex items-center justify-center bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-600 transition text-sm">
                        <i class="fab fa-line"></i>
                    </a>
                </div>
            </div>
        </aside>
        
        <!-- Main Content -->
        <main class="flex-1 ml-64 overflow-y-auto">
            <!-- Top Navigation -->
            <header class="sticky top-0 bg-white border-b border-gray-200 z-40">
                <div class="px-8 py-4 flex items-center justify-between">
                    <div class="flex gap-6">
                        <a href="#" class="text-gray-700 hover:text-purple-600 font-medium transition">สินค้าใหม่</a>
                        <a href="#" class="text-gray-700 hover:text-purple-600 font-medium transition">ขายดี</a>
                        <a href="#" class="text-gray-700 hover:text-purple-600 font-medium transition">ลดราคา</a>
                        <a href="#" class="text-gray-700 hover:text-purple-600 font-medium transition">ทั้งหมด</a>
                    </div>
                    
                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <input type="text" placeholder="ค้นหาสินค้า..." class="pl-10 pr-4 py-2 bg-gray-100 rounded-lg text-sm text-gray-700 focus:bg-white focus:outline-none transition border border-gray-200 w-48"/>
                            <i class="fas fa-search absolute left-3 top-2.5 text-gray-400"></i>
                        </div>
                        
                        <a href="#" class="text-gray-700 hover:text-purple-600 transition relative">
                            <i class="fas fa-shopping-cart text-xl"></i>
                            <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">0</span>
                        </a>
                        
                        <a href="#" class="px-4 py-2 text-gray-700 hover:text-purple-600 font-medium transition">เข้าสู่ระบบ</a>
                        <a href="#" class="px-6 py-2 bg-purple-600 text-white rounded-lg font-medium hover:bg-purple-700 btn-modern transition">สมัครสมาชิก</a>
                    </div>
                </div>
            </header>
            
            <!-- Content -->
            <div class="p-8">
                <!-- Hero Banner -->
                <div class="hero-banner rounded-2xl p-12 mb-12 text-white relative z-0">
                    <div class="max-w-2xl relative z-10">
                        <h2 class="text-5xl font-bold mb-4">ยินดีต้อนรับสู่ MyStore</h2>
                        <p class="text-lg text-purple-100 mb-8">ค้นหาสินค้าคุณภาพ สินค้าแท้ 100% พร้อมบริการที่ดีที่สุด</p>
                        <button class="px-8 py-3 bg-white text-purple-600 rounded-lg font-semibold hover:bg-gray-100 btn-modern transition flex items-center gap-2">
                            <i class="fas fa-arrow-right"></i>
                            เริ่มช้อปปิ้ง
                        </button>
                    </div>
                </div>
                
                <!-- Featured Sections -->
                <div class="grid grid-cols-3 gap-6 mb-12">
                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 card-hover">
                        <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-truck text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">ส่งฟรี</h3>
                        <p class="text-gray-600">ส่งฟรีสำหรับการซื้อเกิน 500 บาท ทั่วประเทศ</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 card-hover">
                        <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-check-circle text-2xl text-green-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">สินค้าแท้</h3>
                        <p class="text-gray-600">สินค้าแท้ 100% รับประกันคุณภาพสูง</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 card-hover">
                        <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-undo text-2xl text-purple-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">คืนเงิน 30 วัน</h3>
                        <p class="text-gray-600">ไม่พอใจ? คืนเงินได้เต็มจำนวน 30 วัน</p>
                    </div>
                </div>
                
                <!-- Products Section -->
                <div class="mb-8">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900">สินค้ายอดนิยม</h2>
                            <p class="text-gray-600 mt-1">เลือกจากสินค้าที่ขายดีที่สุด</p>
                        </div>
                        <div class="flex gap-2">
                            <button class="p-2 bg-gray-100 rounded-lg hover:bg-gray-200 transition">
                                <i class="fas fa-chevron-left text-gray-600"></i>
                            </button>
                            <button class="p-2 bg-gray-100 rounded-lg hover:bg-gray-200 transition">
                                <i class="fas fa-chevron-right text-gray-600"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-4 gap-6">
                        <!-- Product Card 1 -->
                        <div class="bg-white rounded-xl overflow-hidden border border-gray-100 shadow-sm card-hover">
                            <div class="relative h-48 bg-gray-100 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=300&q=80" alt="Running Shoes" class="w-full h-full object-cover hover:scale-110 transition duration-500"/>
                                <span class="product-badge">ลดราคา 20%</span>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-gray-900 mb-2">รองเท้าวิ่ง Nike</h3>
                                <p class="text-sm text-gray-600 mb-4">รองเท้าวิ่งคุณภาพสูง สำหรับนักกีฬา</p>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-2xl font-bold text-purple-600">฿2,500</span>
                                    <div class="flex text-yellow-400 text-sm">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                    </div>
                                </div>
                                <button class="w-full py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 btn-modern font-medium text-sm transition">
                                    <i class="fas fa-cart-plus mr-2"></i>เพิ่มลงตะกร้า
                                </button>
                            </div>
                        </div>
                        
                        <!-- Product Card 2 -->
                        <div class="bg-white rounded-xl overflow-hidden border border-gray-100 shadow-sm card-hover">
                            <div class="relative h-48 bg-gray-100 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=300&q=80" alt="Wireless Headphones" class="w-full h-full object-cover hover:scale-110 transition duration-500"/>
                                <span class="product-badge" style="background: #10b981;">ใหม่</span>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-gray-900 mb-2">หูฟังไร้สาย</h3>
                                <p class="text-sm text-gray-600 mb-4">เสียงคุณภาพ ที่ยืนยาว 30 ชั่วโมง</p>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-2xl font-bold text-purple-600">฿3,200</span>
                                    <div class="flex text-yellow-400 text-sm">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <button class="w-full py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 btn-modern font-medium text-sm transition">
                                    <i class="fas fa-cart-plus mr-2"></i>เพิ่มลงตะกร้า
                                </button>
                            </div>
                        </div>
                        
                        <!-- Product Card 3 -->
                        <div class="bg-white rounded-xl overflow-hidden border border-gray-100 shadow-sm card-hover">
                            <div class="relative h-48 bg-gray-100 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=300&q=80" alt="Smart Watch" class="w-full h-full object-cover hover:scale-110 transition duration-500"/>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-gray-900 mb-2">นาฬิกาอัจฉริยะ</h3>
                                <p class="text-sm text-gray-600 mb-4">นาฬิกาอัจฉริยะพร้อม GPS และ HR Monitor</p>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-2xl font-bold text-purple-600">฿4,990</span>
                                    <div class="flex text-yellow-400 text-sm">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                    </div>
                                </div>
                                <button class="w-full py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 btn-modern font-medium text-sm transition">
                                    <i class="fas fa-cart-plus mr-2"></i>เพิ่มลงตะกร้า
                                </button>
                            </div>
                        </div>
                        
                        <!-- Product Card 4 -->
                        <div class="bg-white rounded-xl overflow-hidden border border-gray-100 shadow-sm card-hover">
                            <div class="relative h-48 bg-gray-100 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=300&q=80" alt="Backpack" class="w-full h-full object-cover hover:scale-110 transition duration-500"/>
                                <span class="product-badge">ลดราคา 30%</span>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-gray-900 mb-2">กระเป๋าเดินทาง</h3>
                                <p class="text-sm text-gray-600 mb-4">กระเป๋าเดินทางทำจากวัสดุเกรด A ทนทาน</p>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-2xl font-bold text-purple-600">฿1,800</span>
                                    <div class="flex text-yellow-400 text-sm">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <button class="w-full py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 btn-modern font-medium text-sm transition">
                                    <i class="fas fa-cart-plus mr-2"></i>เพิ่มลงตะกร้า
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- View All Button -->
                <div class="text-center py-8">
                    <button class="px-8 py-3 border-2 border-purple-600 text-purple-600 rounded-lg font-semibold hover:bg-purple-50 btn-modern transition">
                        ดูสินค้าทั้งหมด
                        <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
