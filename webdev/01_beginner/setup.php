<?php
$page_title = '開発環境の準備 - AIでWebアプリ開発を学ぼう | AI Tech Stack';
$current_page = 'setup';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }';
$section_name = '第2部：開発環境とAIツール';
$step_number = 7;
$total_steps = 20;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">開発環境の準備</h1>

        <!-- イントロ -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8">
            <p class="text-lg">開発を始める前に、必要なツールをインストールしましょう。このページでは、Windows/Mac両方の手順を説明します。</p>
        </div>

        <!-- 必要なもの -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">必要なツール一覧</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-center mb-2">
                        <span class="text-2xl mr-2">📦</span>
                        <h3 class="font-bold">Node.js</h3>
                    </div>
                    <p class="text-sm text-gray-600">Next.jsを動かすために必要</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-center mb-2">
                        <span class="text-2xl mr-2">🐍</span>
                        <h3 class="font-bold">Python</h3>
                    </div>
                    <p class="text-sm text-gray-600">FastAPIを動かすために必要</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-center mb-2">
                        <span class="text-2xl mr-2">📝</span>
                        <h3 class="font-bold">VS Code</h3>
                    </div>
                    <p class="text-sm text-gray-600">コードを書くエディタ</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-center mb-2">
                        <span class="text-2xl mr-2">🔀</span>
                        <h3 class="font-bold">Git</h3>
                    </div>
                    <p class="text-sm text-gray-600">コードのバージョン管理</p>
                </div>
            </div>
        </section>

        <!-- Node.js -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">1. Node.jsのインストール</h2>

            <div class="mb-6">
                <div class="flex border-b">
                    <button onclick="showTab('node', 'windows')" id="node-windows-tab" class="px-4 py-2 font-bold border-b-2 border-blue-600 text-blue-600">Windows</button>
                    <button onclick="showTab('node', 'mac')" id="node-mac-tab" class="px-4 py-2 text-gray-600 hover:text-blue-600">Mac</button>
                </div>

                <div id="node-windows" class="p-4 bg-white rounded-b-lg shadow">
                    <ol class="list-decimal list-inside space-y-3">
                        <li><a href="https://nodejs.org/" class="text-blue-600 hover:underline" target="_blank">Node.js公式サイト</a>にアクセス</li>
                        <li>「LTS」と書かれたボタンをクリックしてダウンロード</li>
                        <li>ダウンロードしたインストーラーを実行</li>
                        <li>「Next」を押して進め、インストール完了</li>
                    </ol>
                    <div class="mt-4 p-3 bg-gray-100 rounded">
                        <p class="text-sm font-bold mb-2">確認方法（PowerShellまたはコマンドプロンプト）：</p>
                        <div class="code-block p-2 rounded font-mono text-sm">node --version</div>
                        <p class="text-sm text-gray-600 mt-2">v18.x.x のようなバージョンが表示されればOK</p>
                    </div>
                </div>

                <div id="node-mac" class="p-4 bg-white rounded-b-lg shadow hidden">
                    <ol class="list-decimal list-inside space-y-3">
                        <li><a href="https://nodejs.org/" class="text-blue-600 hover:underline" target="_blank">Node.js公式サイト</a>にアクセス</li>
                        <li>「LTS」と書かれたボタンをクリックしてダウンロード</li>
                        <li>ダウンロードした.pkgファイルを開いてインストール</li>
                    </ol>
                    <div class="mt-4 p-3 bg-gray-100 rounded">
                        <p class="text-sm font-bold mb-2">確認方法（ターミナル）：</p>
                        <div class="code-block p-2 rounded font-mono text-sm">node --version</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Python -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">2. Pythonのインストール</h2>

            <div class="mb-6">
                <div class="flex border-b">
                    <button onclick="showTab('python', 'windows')" id="python-windows-tab" class="px-4 py-2 font-bold border-b-2 border-blue-600 text-blue-600">Windows</button>
                    <button onclick="showTab('python', 'mac')" id="python-mac-tab" class="px-4 py-2 text-gray-600 hover:text-blue-600">Mac</button>
                </div>

                <div id="python-windows" class="p-4 bg-white rounded-b-lg shadow">
                    <ol class="list-decimal list-inside space-y-3">
                        <li><a href="https://www.python.org/downloads/" class="text-blue-600 hover:underline" target="_blank">Python公式サイト</a>にアクセス</li>
                        <li>「Download Python 3.x.x」をクリック</li>
                        <li>インストーラーを実行</li>
                        <li class="text-red-600 font-bold">重要：「Add Python to PATH」にチェックを入れる</li>
                        <li>「Install Now」をクリック</li>
                    </ol>
                    <div class="mt-4 p-3 bg-red-50 border-l-4 border-red-500 rounded">
                        <p class="text-sm font-bold text-red-700">必ず「Add Python to PATH」にチェック！</p>
                        <p class="text-sm text-red-600">これを忘れると、コマンドでpythonが使えません。</p>
                    </div>
                    <div class="mt-4 p-3 bg-gray-100 rounded">
                        <p class="text-sm font-bold mb-2">確認方法：</p>
                        <div class="code-block p-2 rounded font-mono text-sm">python --version</div>
                    </div>
                </div>

                <div id="python-mac" class="p-4 bg-white rounded-b-lg shadow hidden">
                    <p class="mb-3">Macには最初からPythonがインストールされていますが、最新版をインストールすることをおすすめします。</p>
                    <ol class="list-decimal list-inside space-y-3">
                        <li><a href="https://www.python.org/downloads/" class="text-blue-600 hover:underline" target="_blank">Python公式サイト</a>にアクセス</li>
                        <li>「Download Python 3.x.x」をクリック</li>
                        <li>ダウンロードした.pkgファイルを開いてインストール</li>
                    </ol>
                    <div class="mt-4 p-3 bg-gray-100 rounded">
                        <p class="text-sm font-bold mb-2">確認方法：</p>
                        <div class="code-block p-2 rounded font-mono text-sm">python3 --version</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- VS Code -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">3. VS Codeのインストール</h2>

            <ol class="list-decimal list-inside space-y-3 mb-6">
                <li><a href="https://code.visualstudio.com/" class="text-blue-600 hover:underline" target="_blank">VS Code公式サイト</a>にアクセス</li>
                <li>「Download」をクリック（自動でOSを判別）</li>
                <li>ダウンロードしたファイルを実行してインストール</li>
            </ol>

            <h3 class="text-lg font-bold mb-3">おすすめ拡張機能</h3>
            <div class="bg-white p-4 rounded-lg shadow">
                <ul class="space-y-2">
                    <li class="flex items-center">
                        <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-sm mr-3">必須</span>
                        <span><strong>Japanese Language Pack</strong> - 日本語化</span>
                    </li>
                    <li class="flex items-center">
                        <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-sm mr-3">必須</span>
                        <span><strong>Python</strong> - Python開発サポート</span>
                    </li>
                    <li class="flex items-center">
                        <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-sm mr-3">推奨</span>
                        <span><strong>ESLint</strong> - JavaScript/TypeScriptの静的解析</span>
                    </li>
                    <li class="flex items-center">
                        <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-sm mr-3">推奨</span>
                        <span><strong>Prettier</strong> - コード整形</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Git -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">4. Gitのインストール</h2>

            <div class="mb-6">
                <div class="flex border-b">
                    <button onclick="showTab('git', 'windows')" id="git-windows-tab" class="px-4 py-2 font-bold border-b-2 border-blue-600 text-blue-600">Windows</button>
                    <button onclick="showTab('git', 'mac')" id="git-mac-tab" class="px-4 py-2 text-gray-600 hover:text-blue-600">Mac</button>
                </div>

                <div id="git-windows" class="p-4 bg-white rounded-b-lg shadow">
                    <ol class="list-decimal list-inside space-y-3">
                        <li><a href="https://git-scm.com/download/win" class="text-blue-600 hover:underline" target="_blank">Git公式サイト</a>にアクセス</li>
                        <li>自動でダウンロードが始まる</li>
                        <li>インストーラーを実行し、基本的にデフォルト設定でOK</li>
                    </ol>
                    <div class="mt-4 p-3 bg-gray-100 rounded">
                        <p class="text-sm font-bold mb-2">確認方法：</p>
                        <div class="code-block p-2 rounded font-mono text-sm">git --version</div>
                    </div>
                </div>

                <div id="git-mac" class="p-4 bg-white rounded-b-lg shadow hidden">
                    <p class="mb-3">ターミナルで以下のコマンドを実行：</p>
                    <div class="code-block p-3 rounded font-mono text-sm mb-3">xcode-select --install</div>
                    <p class="text-sm text-gray-600">ポップアップが表示されたら「インストール」をクリック</p>
                    <div class="mt-4 p-3 bg-gray-100 rounded">
                        <p class="text-sm font-bold mb-2">確認方法：</p>
                        <div class="code-block p-2 rounded font-mono text-sm">git --version</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ターミナルの基本 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">5. ターミナル（コマンドライン）の基本</h2>

            <p class="mb-4">開発では「ターミナル」からコマンドを入力することが多いです。最低限のコマンドを覚えておきましょう。</p>

            <div class="bg-white p-4 rounded-lg shadow mb-6 overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-3">コマンド</th>
                            <th class="p-3">意味</th>
                            <th class="p-3">例</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="p-3 font-mono">cd</td>
                            <td class="p-3">ディレクトリ（フォルダ）を移動</td>
                            <td class="p-3 font-mono text-gray-600">cd Documents</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3 font-mono">ls (Mac) / dir (Win)</td>
                            <td class="p-3">ファイル一覧を表示</td>
                            <td class="p-3 font-mono text-gray-600">ls</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3 font-mono">mkdir</td>
                            <td class="p-3">新しいフォルダを作成</td>
                            <td class="p-3 font-mono text-gray-600">mkdir my-project</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3 font-mono">pwd</td>
                            <td class="p-3">現在のディレクトリを表示</td>
                            <td class="p-3 font-mono text-gray-600">pwd</td>
                        </tr>
                        <tr>
                            <td class="p-3 font-mono">clear</td>
                            <td class="p-3">画面をクリア</td>
                            <td class="p-3 font-mono text-gray-600">clear</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h3 class="text-lg font-bold mb-3">npm / pip コマンド</h3>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold mb-2 text-blue-600">npm（Node.js用）</h4>
                    <div class="code-block p-2 rounded text-sm font-mono space-y-1">
                        <div><span class="text-gray-400"># プロジェクト作成</span></div>
                        <div>npx create-next-app@latest</div>
                        <div><span class="text-gray-400"># パッケージインストール</span></div>
                        <div>npm install axios</div>
                        <div><span class="text-gray-400"># 開発サーバー起動</span></div>
                        <div>npm run dev</div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold mb-2 text-green-600">pip（Python用）</h4>
                    <div class="code-block p-2 rounded text-sm font-mono space-y-1">
                        <div><span class="text-gray-400"># パッケージインストール</span></div>
                        <div>pip install fastapi</div>
                        <div><span class="text-gray-400"># インストール済み一覧</span></div>
                        <div>pip list</div>
                        <div><span class="text-gray-400"># サーバー起動</span></div>
                        <div>uvicorn main:app --reload</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- よくあるトラブル -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-red-200 text-red-700">よくあるトラブルと解決法</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow border-l-4 border-red-500">
                    <h3 class="font-bold mb-2">「'node' は認識されていません」と表示される</h3>
                    <p class="text-sm text-gray-600 mb-2">Node.jsのパスが通っていません。</p>
                    <p class="text-sm"><strong>解決法：</strong>PCを再起動するか、インストールし直して「Add to PATH」にチェック</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow border-l-4 border-red-500">
                    <h3 class="font-bold mb-2">「'python' は認識されていません」と表示される</h3>
                    <p class="text-sm text-gray-600 mb-2">Pythonのパスが通っていません。</p>
                    <p class="text-sm"><strong>解決法：</strong>Pythonをアンインストールし、再インストール時に「Add Python to PATH」にチェック</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow border-l-4 border-red-500">
                    <h3 class="font-bold mb-2">Macで「python」と打つとエラーになる</h3>
                    <p class="text-sm text-gray-600 mb-2">Macでは<code class="bg-gray-200 px-1 rounded">python3</code>と入力する必要があります。</p>
                    <p class="text-sm"><strong>解決法：</strong><code class="bg-gray-200 px-1 rounded">python3</code>または<code class="bg-gray-200 px-1 rounded">pip3</code>を使用</p>
                </div>
            </div>

            <div class="mt-6 p-4 bg-yellow-50 border-l-4 border-yellow-500 rounded">
                <p><strong>困ったら：</strong>エラーメッセージをそのままAI（Claude CodeやCursor）に質問すると、解決策を教えてもらえます。</p>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="fastapi-basics.php" class="flex items-center text-gray-600 hover:text-blue-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：FastAPI基礎
            </a>
            <a href="claude-code.php" class="flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                次へ：Claude Codeの使い方
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

    
    <script>
        function showTab(section, os) {
            // Hide all tabs in this section
            document.getElementById(`${section}-windows`).classList.add('hidden');
            document.getElementById(`${section}-mac`).classList.add('hidden');

            // Reset tab styles
            document.getElementById(`${section}-windows-tab`).classList.remove('border-b-2', 'border-blue-600', 'text-blue-600', 'font-bold');
            document.getElementById(`${section}-mac-tab`).classList.remove('border-b-2', 'border-blue-600', 'text-blue-600', 'font-bold');
            document.getElementById(`${section}-windows-tab`).classList.add('text-gray-600');
            document.getElementById(`${section}-mac-tab`).classList.add('text-gray-600');

            // Show selected tab
            document.getElementById(`${section}-${os}`).classList.remove('hidden');
            document.getElementById(`${section}-${os}-tab`).classList.add('border-b-2', 'border-blue-600', 'text-blue-600', 'font-bold');
            document.getElementById(`${section}-${os}-tab`).classList.remove('text-gray-600');
        }
    </script>

<?php include 'includes/footer.php'; ?>
