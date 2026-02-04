<?php
$page_title = 'Dockerとは - AI×Web開発 中級編 | AI Tech Stack';
$current_page = 'docker';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }';
$section_name = '第2部：Docker入門';
$step_number = 5;
$total_steps = 24;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">Dockerとは</h1>

        <!-- イントロ -->
        <div class="bg-cyan-50 border-l-4 border-cyan-500 p-6 mb-8">
            <p class="text-lg">Dockerは、アプリケーションを「コンテナ」という独立した環境で動かす技術。「自分のPCでは動くのに...」という問題を解決します。</p>
        </div>

        <!-- Dockerとは -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">Dockerが解決する問題</h2>

            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div class="bg-red-50 p-6 rounded-lg">
                    <h3 class="font-bold text-red-700 mb-3">Dockerなしの場合</h3>
                    <ul class="space-y-2 text-sm text-red-600">
                        <li>✗ 「自分のPCでは動くのに、サーバーで動かない」</li>
                        <li>✗ 「Node.jsのバージョンが違う」</li>
                        <li>✗ 「チームメンバーの環境が揃わない」</li>
                        <li>✗ 「MySQLのインストールが面倒」</li>
                        <li>✗ 「WindowsとMacで動作が違う」</li>
                    </ul>
                </div>
                <div class="bg-green-50 p-6 rounded-lg">
                    <h3 class="font-bold text-green-700 mb-3">Dockerありの場合</h3>
                    <ul class="space-y-2 text-sm text-green-600">
                        <li>○ 開発・本番で同じ環境</li>
                        <li>○ バージョンを固定できる</li>
                        <li>○ コマンド1つで環境構築</li>
                        <li>○ MySQLも簡単に起動</li>
                        <li>○ どのOSでも同じ動作</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 基本概念 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">Docker の基本概念</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start gap-4">
                        <div class="text-4xl">📦</div>
                        <div>
                            <h3 class="font-bold text-lg mb-2">コンテナ（Container）</h3>
                            <p class="text-sm text-gray-600 mb-2">アプリケーションとその実行環境をまとめた「箱」。軽量で起動が速い。</p>
                            <p class="text-xs bg-gray-100 p-2 rounded">例：Pythonアプリ + Python 3.11 + 必要なライブラリ = 1つのコンテナ</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start gap-4">
                        <div class="text-4xl">📋</div>
                        <div>
                            <h3 class="font-bold text-lg mb-2">イメージ（Image）</h3>
                            <p class="text-sm text-gray-600 mb-2">コンテナの「設計図」。イメージからコンテナを作成する。</p>
                            <p class="text-xs bg-gray-100 p-2 rounded">例：python:3.11 イメージ → Pythonが入ったコンテナを作成</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start gap-4">
                        <div class="text-4xl">📝</div>
                        <div>
                            <h3 class="font-bold text-lg mb-2">Dockerfile</h3>
                            <p class="text-sm text-gray-600 mb-2">イメージを作るための「レシピ」。必要な手順を記述。</p>
                            <p class="text-xs bg-gray-100 p-2 rounded">例：Pythonイメージ + pip install → カスタムイメージ</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start gap-4">
                        <div class="text-4xl">🏪</div>
                        <div>
                            <h3 class="font-bold text-lg mb-2">Docker Hub</h3>
                            <p class="text-sm text-gray-600 mb-2">イメージを共有するためのレジストリ（保管庫）。</p>
                            <p class="text-xs bg-gray-100 p-2 rounded">例：python, mysql, node などの公式イメージをダウンロード可能</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 仮想マシンとの違い -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">仮想マシン vs Docker</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="font-bold mb-4 text-center">仮想マシン（VM）</h3>
                        <div class="space-y-2">
                            <div class="bg-blue-100 p-2 text-center rounded">App A</div>
                            <div class="bg-blue-200 p-2 text-center rounded">Guest OS</div>
                            <div class="bg-blue-100 p-2 text-center rounded">App B</div>
                            <div class="bg-blue-200 p-2 text-center rounded">Guest OS</div>
                            <div class="bg-gray-300 p-2 text-center rounded">Hypervisor</div>
                            <div class="bg-gray-400 p-2 text-center rounded text-white">Host OS</div>
                        </div>
                        <ul class="mt-4 text-sm text-gray-600 space-y-1">
                            <li>・OSごとにメモリ消費</li>
                            <li>・起動に数分かかる</li>
                            <li>・数GB〜数十GBのサイズ</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold mb-4 text-center">Docker</h3>
                        <div class="space-y-2">
                            <div class="flex gap-2">
                                <div class="flex-1 bg-cyan-100 p-2 text-center rounded">App A</div>
                                <div class="flex-1 bg-cyan-100 p-2 text-center rounded">App B</div>
                            </div>
                            <div class="bg-cyan-300 p-2 text-center rounded">Docker Engine</div>
                            <div class="bg-gray-400 p-2 text-center rounded text-white">Host OS</div>
                        </div>
                        <ul class="mt-4 text-sm text-gray-600 space-y-1">
                            <li>・OSを共有（軽量）</li>
                            <li>・起動は数秒</li>
                            <li>・数MB〜数百MBのサイズ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- インストール -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">Docker Desktop のインストール</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">手順</h3>
                <ol class="space-y-4">
                    <li class="flex gap-3">
                        <span class="bg-cyan-100 text-cyan-700 w-8 h-8 rounded-full flex items-center justify-center font-bold flex-shrink-0">1</span>
                        <div>
                            <p class="font-bold">Docker Desktop をダウンロード</p>
                            <p class="text-sm text-gray-600">
                                <a href="https://www.docker.com/products/docker-desktop/" class="text-cyan-600 underline" target="_blank">https://www.docker.com/products/docker-desktop/</a>
                            </p>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <span class="bg-cyan-100 text-cyan-700 w-8 h-8 rounded-full flex items-center justify-center font-bold flex-shrink-0">2</span>
                        <div>
                            <p class="font-bold">インストーラーを実行</p>
                            <p class="text-sm text-gray-600">Windowsの場合はWSL2が必要（インストーラーが案内してくれる）</p>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <span class="bg-cyan-100 text-cyan-700 w-8 h-8 rounded-full flex items-center justify-center font-bold flex-shrink-0">3</span>
                        <div>
                            <p class="font-bold">Docker Desktop を起動</p>
                            <p class="text-sm text-gray-600">起動後、タスクバーにクジラのアイコンが表示される</p>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <span class="bg-cyan-100 text-cyan-700 w-8 h-8 rounded-full flex items-center justify-center font-bold flex-shrink-0">4</span>
                        <div>
                            <p class="font-bold">動作確認</p>
                            <div class="code-block p-3 rounded font-mono text-sm mt-2">
                                docker --version
                            </div>
                        </div>
                    </li>
                </ol>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p><strong>注意：</strong>Docker Desktopは、一定規模以上の企業での利用は有料です。個人・学習・小規模企業は無料で使えます。</p>
            </div>
        </section>

        <!-- 最初のコンテナ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">はじめてのコンテナ</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <p class="mb-4">Hello Worldコンテナを実行してみましょう。</p>
                <div class="code-block p-4 rounded font-mono text-sm mb-4">
                    docker run hello-world
                </div>
                <p class="text-sm text-gray-600 mb-4">このコマンドは以下を行います：</p>
                <ol class="text-sm space-y-2">
                    <li>1. hello-worldイメージをDocker Hubからダウンロード</li>
                    <li>2. そのイメージからコンテナを作成</li>
                    <li>3. コンテナ内のプログラムを実行</li>
                    <li>4. 結果を表示して終了</li>
                </ol>
            </div>
        </section>

        <!-- Web開発での使い方 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">Web開発でのDocker活用</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">典型的な構成</h3>
                <div class="bg-gray-100 p-6 rounded">
                    <div class="flex flex-wrap justify-center items-center gap-4">
                        <div class="bg-blue-100 p-4 rounded text-center">
                            <p class="font-bold">Frontend</p>
                            <p class="text-xs">Next.js</p>
                        </div>
                        <span class="text-2xl">↔</span>
                        <div class="bg-green-100 p-4 rounded text-center">
                            <p class="font-bold">Backend</p>
                            <p class="text-xs">FastAPI</p>
                        </div>
                        <span class="text-2xl">↔</span>
                        <div class="bg-orange-100 p-4 rounded text-center">
                            <p class="font-bold">Database</p>
                            <p class="text-xs">MySQL</p>
                        </div>
                    </div>
                    <p class="text-center mt-4 text-sm text-gray-600">各コンポーネントを別々のコンテナで実行</p>
                </div>

                <div class="mt-6">
                    <h4 class="font-bold mb-3">メリット</h4>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-start">
                            <span class="text-cyan-600 mr-2">✓</span>
                            <span>コマンド1つで全環境を起動（docker compose up）</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-cyan-600 mr-2">✓</span>
                            <span>MySQLをインストールしなくてもコンテナで動く</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-cyan-600 mr-2">✓</span>
                            <span>本番環境と同じ構成で開発できる</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-cyan-600 mr-2">✓</span>
                            <span>チームメンバー全員が同じ環境</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">まとめ</h2>
            <div class="bg-cyan-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-cyan-600 mr-2">✓</span>
                        <span>Dockerは「環境の違い」問題を解決する</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-cyan-600 mr-2">✓</span>
                        <span>コンテナは軽量で起動が速い</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-cyan-600 mr-2">✓</span>
                        <span>イメージ（設計図）からコンテナ（実体）を作る</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-cyan-600 mr-2">✓</span>
                        <span>Docker Desktopでローカル環境を構築</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="database-design.php" class="flex items-center text-gray-600 hover:text-cyan-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                データベース設計
            </a>
            <a href="docker-basics.php" class="flex items-center bg-cyan-600 text-white px-6 py-3 rounded-lg hover:bg-cyan-700">
                次へ：Docker基本操作
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
