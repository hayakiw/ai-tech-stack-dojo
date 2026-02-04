<?php
$page_title = 'AI Tech Stack Dojo - AIと学ぶ';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'includes/meta.php'; ?>
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-hero {
            background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #312e81 100%);
        }
        .card-hp {
            background: linear-gradient(135deg, #ea580c 0%, #f59e0b 100%);
        }
        .card-webdev {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card-marketing {
            background: linear-gradient(135deg, #0d9488 0%, #0891b2 100%);
        }
        .card-sales {
            background: linear-gradient(135deg, #3b82f6 0%, #6366f1 100%);
        }
        .card-bi {
            background: linear-gradient(135deg, #059669 0%, #10b981 100%);
        }
        .card-automation {
            background: linear-gradient(135deg, #7c3aed 0%, #a855f7 100%);
        }
        .card-sidejob {
            background: linear-gradient(135deg, #e11d48 0%, #f43f5e 100%);
        }
        .card-design {
            background: linear-gradient(135deg, #d946ef 0%, #ec4899 100%);
        }
        .card-training {
            background: linear-gradient(135deg, #0284c7 0%, #38bdf8 100%);
        }
        .hover-scale {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-scale:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- ヒーローセクション -->
    <section class="gradient-hero text-white py-24">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">AI Tech Stack Dojo</h1>
            <p class="text-xl md:text-2xl mb-4 opacity-90">AIと一緒に学ぶ、実践的なスキル習得サイト</p>
            <p class="text-lg opacity-75 mb-8">完全初心者から、AIを活用したWeb制作・開発・マーケティング・営業・データ分析を習得</p>
            <div class="flex flex-wrap justify-center gap-3">
                <span class="bg-white/20 px-3 py-2 rounded-full text-sm">ChatGPT / Claude</span>
                <span class="bg-white/20 px-3 py-2 rounded-full text-sm">Web開発</span>
                <span class="bg-white/20 px-3 py-2 rounded-full text-sm">デザイン</span>
                <span class="bg-white/20 px-3 py-2 rounded-full text-sm">ホームページ制作</span>
                <span class="bg-white/20 px-3 py-2 rounded-full text-sm">マーケティング</span>
                <span class="bg-white/20 px-3 py-2 rounded-full text-sm">営業・セールス</span>
                <span class="bg-white/20 px-3 py-2 rounded-full text-sm">業務自動化</span>
                <span class="bg-white/20 px-3 py-2 rounded-full text-sm">データ分析・BI</span>
                <span class="bg-white/20 px-3 py-2 rounded-full text-sm">人材育成・教育</span>
                <span class="bg-white/20 px-3 py-2 rounded-full text-sm">副業・フリーランス</span>
            </div>
        </div>
    </section>

    <!-- コース選択 -->
    <section class="py-20 -mt-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5 max-w-7xl mx-auto">
                <!-- Web開発コース -->
                <a href="webdev/" class="block hover-scale">
                    <div class="card-webdev text-white rounded-2xl overflow-hidden shadow-xl h-full">
                        <div class="p-6">
                            <div class="text-5xl mb-3">💻</div>
                            <h2 class="text-2xl font-bold mb-3">AI×Web開発</h2>
                            <p class="text-sm opacity-90 mb-4">モダンなWeb開発を基礎から実践まで学ぶ</p>
                            <div class="space-y-2 text-sm opacity-80">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    HTML/CSS/JavaScript基礎
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    Next.js / FastAPI
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    Claude Code / Cursor
                                </div>
                            </div>
                        </div>
                        <div class="bg-white/20 px-6 py-3 flex justify-between items-center">
                            <span class="font-bold text-sm">初級〜上級 / 80レッスン</span>
                            <span class="bg-white text-purple-600 px-3 py-1 rounded-full font-bold text-xs">始める →</span>
                        </div>
                    </div>
                </a>

                <!-- デザインコース -->
                <a href="design/" class="block hover-scale">
                    <div class="card-design text-white rounded-2xl overflow-hidden shadow-xl h-full">
                        <div class="p-6">
                            <div class="text-5xl mb-3">🎨</div>
                            <h2 class="text-2xl font-bold mb-3">AI×デザイン</h2>
                            <p class="text-sm opacity-90 mb-4">AIでプロ品質のデザインを作成</p>
                            <div class="space-y-2 text-sm opacity-80">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    デザイン思考・色彩・タイポグラフィ
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    Gemini・Canva・DALL-E活用
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    ロゴ・バナー・名刺・チラシ制作
                                </div>
                            </div>
                        </div>
                        <div class="bg-white/20 px-6 py-3 flex justify-between items-center">
                            <span class="font-bold text-sm">初心者向け / 14レッスン</span>
                            <span class="bg-white text-fuchsia-600 px-3 py-1 rounded-full font-bold text-xs">始める →</span>
                        </div>
                    </div>
                </a>

                <!-- ホームページ制作コース -->
                <a href="hp/" class="block hover-scale">
                    <div class="card-hp text-white rounded-2xl overflow-hidden shadow-xl h-full">
                        <div class="p-6">
                            <div class="text-5xl mb-3">🌐</div>
                            <h2 class="text-2xl font-bold mb-3">AI×ホームページ制作</h2>
                            <p class="text-sm opacity-90 mb-4">AIを使って初心者でも素敵なWebサイトが作れる</p>
                            <div class="space-y-2 text-sm opacity-80">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    HTML/CSS/デザイン基礎
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    AIデザイン・コーディング
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    ポートフォリオ・LP制作
                                </div>
                            </div>
                        </div>
                        <div class="bg-white/20 px-6 py-3 flex justify-between items-center">
                            <span class="font-bold text-sm">初心者向け / 14レッスン</span>
                            <span class="bg-white text-orange-600 px-3 py-1 rounded-full font-bold text-xs">始める →</span>
                        </div>
                    </div>
                </a>

                <!-- マーケティングコース -->
                <a href="marketing/" class="block hover-scale">
                    <div class="card-marketing text-white rounded-2xl overflow-hidden shadow-xl h-full">
                        <div class="p-6">
                            <div class="text-5xl mb-3">📊</div>
                            <h2 class="text-2xl font-bold mb-3">AI×マーケティング</h2>
                            <p class="text-sm opacity-90 mb-4">マーケティングの基礎と実践テクニック</p>
                            <div class="space-y-2 text-sm opacity-80">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    マーケティングの基礎知識
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    SNS・SEO・広告×AI
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    プロンプト・コピーライティング
                                </div>
                            </div>
                        </div>
                        <div class="bg-white/20 px-6 py-3 flex justify-between items-center">
                            <span class="font-bold text-sm">初心者向け / 16レッスン</span>
                            <span class="bg-white text-teal-600 px-3 py-1 rounded-full font-bold text-xs">始める →</span>
                        </div>
                    </div>
                </a>

                <!-- 営業・セールスコース -->
                <a href="sales/" class="block hover-scale">
                    <div class="card-sales text-white rounded-2xl overflow-hidden shadow-xl h-full">
                        <div class="p-6">
                            <div class="text-5xl mb-3">💼</div>
                            <h2 class="text-2xl font-bold mb-3">AI×営業・セールス</h2>
                            <p class="text-sm opacity-90 mb-4">AIで営業力を飛躍的に向上させる</p>
                            <div class="space-y-2 text-sm opacity-80">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    営業の基礎・プロセス
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    AIリサーチ・提案書作成
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    商談・クロージング術
                                </div>
                            </div>
                        </div>
                        <div class="bg-white/20 px-6 py-3 flex justify-between items-center">
                            <span class="font-bold text-sm">初心者向け / 14レッスン</span>
                            <span class="bg-white text-blue-600 px-3 py-1 rounded-full font-bold text-xs">始める →</span>
                        </div>
                    </div>
                </a>

                <!-- 業務自動化コース -->
                <a href="process-auto/" class="block hover-scale">
                    <div class="card-automation text-white rounded-2xl overflow-hidden shadow-xl h-full">
                        <div class="p-6">
                            <div class="text-5xl mb-3">⚡</div>
                            <h2 class="text-2xl font-bold mb-3">AI×業務自動化</h2>
                            <p class="text-sm opacity-90 mb-4">AIで面倒な作業を自動化する</p>
                            <div class="space-y-2 text-sm opacity-80">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    自動化の基礎・計画
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    Zapier・Make活用
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    メール・ドキュメント自動化
                                </div>
                            </div>
                        </div>
                        <div class="bg-white/20 px-6 py-3 flex justify-between items-center">
                            <span class="font-bold text-sm">初心者向け / 14レッスン</span>
                            <span class="bg-white text-violet-600 px-3 py-1 rounded-full font-bold text-xs">始める →</span>
                        </div>
                    </div>
                </a>

                <!-- データ分析・BIコース -->
                <a href="bi/" class="block hover-scale">
                    <div class="card-bi text-white rounded-2xl overflow-hidden shadow-xl h-full">
                        <div class="p-6">
                            <div class="text-5xl mb-3">📈</div>
                            <h2 class="text-2xl font-bold mb-3">AI×データ分析・BI</h2>
                            <p class="text-sm opacity-90 mb-4">AIでデータドリブンな意思決定を実現</p>
                            <div class="space-y-2 text-sm opacity-80">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    データ分析の基礎
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    AI×スプレッドシート活用
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    ダッシュボード・KPI設計
                                </div>
                            </div>
                        </div>
                        <div class="bg-white/20 px-6 py-3 flex justify-between items-center">
                            <span class="font-bold text-sm">初心者向け / 14レッスン</span>
                            <span class="bg-white text-emerald-600 px-3 py-1 rounded-full font-bold text-xs">始める →</span>
                        </div>
                    </div>
                </a>

                <!-- 人材育成・教育コース -->
                <a href="training/" class="block hover-scale">
                    <div class="card-training text-white rounded-2xl overflow-hidden shadow-xl h-full">
                        <div class="p-6">
                            <div class="text-5xl mb-3">📚</div>
                            <h2 class="text-2xl font-bold mb-3">AI×人材育成・教育</h2>
                            <p class="text-sm opacity-90 mb-4">AIで効果的な人材育成・研修を実現</p>
                            <div class="space-y-2 text-sm opacity-80">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    学習設計・成人学習理論
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    AI教材・テスト作成
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    研修効果測定・改善
                                </div>
                            </div>
                        </div>
                        <div class="bg-white/20 px-6 py-3 flex justify-between items-center">
                            <span class="font-bold text-sm">初心者向け / 14レッスン</span>
                            <span class="bg-white text-sky-600 px-3 py-1 rounded-full font-bold text-xs">始める →</span>
                        </div>
                    </div>
                </a>

                <!-- 副業・フリーランスコース -->
                <a href="sidejob/" class="block hover-scale">
                    <div class="card-sidejob text-white rounded-2xl overflow-hidden shadow-xl h-full">
                        <div class="p-6">
                            <div class="text-5xl mb-3">🚀</div>
                            <h2 class="text-2xl font-bold mb-3">AI×副業・フリーランス</h2>
                            <p class="text-sm opacity-90 mb-4">AIを活用して副業で収入を得る</p>
                            <div class="space-y-2 text-sm opacity-80">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    副業の始め方・税金対策
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    案件獲得・ポートフォリオ
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    価格設定・契約・スケール
                                </div>
                            </div>
                        </div>
                        <div class="bg-white/20 px-6 py-3 flex justify-between items-center">
                            <span class="font-bold text-sm">初心者向け / 14レッスン</span>
                            <span class="bg-white text-rose-600 px-3 py-1 rounded-full font-bold text-xs">始める →</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 特徴 -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">AI Tech Stack Dojoの特徴</h2>
            <div class="grid md:grid-cols-4 gap-8 max-w-5xl mx-auto">
                <div class="text-center">
                    <div class="text-4xl mb-4">🤖</div>
                    <h3 class="font-bold mb-2">AI活用が前提</h3>
                    <p class="text-sm text-gray-600">ChatGPTやClaudeを使った実践的な学習</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-4">📱</div>
                    <h3 class="font-bold mb-2">初心者でも安心</h3>
                    <p class="text-sm text-gray-600">専門知識ゼロから始められる丁寧な解説</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-4">🎯</div>
                    <h3 class="font-bold mb-2">実践重視</h3>
                    <p class="text-sm text-gray-600">すぐに使えるプロンプトやコード例を提供</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-4">🆓</div>
                    <h3 class="font-bold mb-2">完全無料</h3>
                    <p class="text-sm text-gray-600">すべてのコンテンツを無料で学習可能</p>
                </div>
            </div>
        </div>
    </section>

    <!-- こんな方におすすめ -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">こんな方におすすめ</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
                <div class="bg-white p-6 rounded-lg shadow flex items-start">
                    <div class="text-green-500 text-2xl mr-4">✓</div>
                    <div>
                        <h3 class="font-bold mb-1">プログラミング初心者</h3>
                        <p class="text-sm text-gray-600">AIの力を借りて、効率よくプログラミングを習得したい方</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow flex items-start">
                    <div class="text-green-500 text-2xl mr-4">✓</div>
                    <div>
                        <h3 class="font-bold mb-1">マーケティング担当者</h3>
                        <p class="text-sm text-gray-600">AIを活用して業務効率を上げたい方</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow flex items-start">
                    <div class="text-green-500 text-2xl mr-4">✓</div>
                    <div>
                        <h3 class="font-bold mb-1">自分のサイトを作りたい方</h3>
                        <p class="text-sm text-gray-600">ポートフォリオやビジネスサイトをAIで効率的に制作したい方</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow flex items-start">
                    <div class="text-green-500 text-2xl mr-4">✓</div>
                    <div>
                        <h3 class="font-bold mb-1">営業担当者</h3>
                        <p class="text-sm text-gray-600">AIを活用して営業成果を上げたい方</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow flex items-start">
                    <div class="text-green-500 text-2xl mr-4">✓</div>
                    <div>
                        <h3 class="font-bold mb-1">データ分析に興味がある方</h3>
                        <p class="text-sm text-gray-600">AIでデータを活用し、意思決定の質を高めたい方</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow flex items-start">
                    <div class="text-green-500 text-2xl mr-4">✓</div>
                    <div>
                        <h3 class="font-bold mb-1">業務効率化を図りたい方</h3>
                        <p class="text-sm text-gray-600">繰り返し作業を自動化して生産性を上げたい方</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow flex items-start">
                    <div class="text-green-500 text-2xl mr-4">✓</div>
                    <div>
                        <h3 class="font-bold mb-1">副業・フリーランスに興味がある方</h3>
                        <p class="text-sm text-gray-600">AIを活用して副収入を得たい、独立したい方</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow flex items-start">
                    <div class="text-green-500 text-2xl mr-4">✓</div>
                    <div>
                        <h3 class="font-bold mb-1">デザインを学びたい方</h3>
                        <p class="text-sm text-gray-600">AIを活用してロゴ・バナー・チラシ等を作りたい方</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 gradient-hero text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">さあ、始めましょう</h2>
            <p class="text-xl mb-8 opacity-90">AIと一緒に、新しいスキルを身につけよう</p>
            <div class="flex flex-wrap justify-center gap-3">
                <a href="hp/" class="inline-block bg-orange-500 hover:bg-orange-600 text-white px-5 py-2 rounded-lg font-bold text-sm transition">
                    HP制作
                </a>
                <a href="webdev/" class="inline-block bg-purple-500 hover:bg-purple-600 text-white px-5 py-2 rounded-lg font-bold text-sm transition">
                    Web開発
                </a>
                <a href="marketing/" class="inline-block bg-teal-500 hover:bg-teal-600 text-white px-5 py-2 rounded-lg font-bold text-sm transition">
                    マーケティング
                </a>
                <a href="sales/" class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded-lg font-bold text-sm transition">
                    営業・セールス
                </a>
                <a href="bi/" class="inline-block bg-emerald-500 hover:bg-emerald-600 text-white px-5 py-2 rounded-lg font-bold text-sm transition">
                    データ分析・BI
                </a>
                <a href="process-auto/" class="inline-block bg-violet-500 hover:bg-violet-600 text-white px-5 py-2 rounded-lg font-bold text-sm transition">
                    業務自動化
                </a>
                <a href="sidejob/" class="inline-block bg-rose-500 hover:bg-rose-600 text-white px-5 py-2 rounded-lg font-bold text-sm transition">
                    副業・フリーランス
                </a>
                <a href="design/" class="inline-block bg-fuchsia-500 hover:bg-fuchsia-600 text-white px-5 py-2 rounded-lg font-bold text-sm transition">
                    デザイン
                </a>
                <a href="training/" class="inline-block bg-sky-500 hover:bg-sky-600 text-white px-5 py-2 rounded-lg font-bold text-sm transition">
                    人材育成・教育
                </a>
            </div>
        </div>
    </section>

    <!-- フッター -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-xl font-bold mb-4 md:mb-0">AI Tech Stack Dojo</div>
                <div class="flex flex-wrap justify-center gap-4 md:gap-6">
                <a href="webdev/" class="hover:text-gray-300">Web開発</a>
                <a href="design/" class="hover:text-gray-300">デザイン</a>
                    <a href="hp/" class="hover:text-gray-300">HP制作</a>
                    <a href="marketing/" class="hover:text-gray-300">マーケティング</a>
                    <a href="sales/" class="hover:text-gray-300">営業・セールス</a>
                    <a href="process-auto/" class="hover:text-gray-300">業務自動化</a>
                    <a href="bi/" class="hover:text-gray-300">データ分析・BI</a>
                    <a href="training/" class="hover:text-gray-300">人材育成・教育</a>
                    <a href="sidejob/" class="hover:text-gray-300">副業・フリーランス</a>
                </div>
            </div>
            <div class="text-center mt-8 text-gray-400">
                <p>AIと一緒に学ぶ、実践的なスキル習得サイト</p>
            </div>
        </div>
    </footer>
</body>
</html>
