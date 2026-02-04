<?php
$page_title = 'React/Next.js基礎 - AIでWebアプリ開発を学ぼう | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：Web開発の基礎知識';
$step_number = 5;
$total_steps = 20;
$extra_styles = '
        .code-block {
            background: #1e293b;
            color: #e2e8f0;
        }
        .keyword { color: #c084fc; }
        .string { color: #86efac; }
        .number { color: #fcd34d; }
        .comment { color: #64748b; }
        .function { color: #60a5fa; }
        .component { color: #f472b6; }
        .tag { color: #22d3ee; }
';

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">React/Next.js基礎</h1>

        <!-- イントロ -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8">
            <p class="text-lg">ReactはUIを構築するためのライブラリ、Next.jsはReactを使いやすくしたフレームワークです。このサイトではNext.jsを使ってフロントエンドを開発します。</p>
        </div>

        <!-- セクション1: Reactとは -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">Reactとは</h2>

            <p class="mb-4">Reactは、Facebookが開発したUIライブラリです。「コンポーネント」という部品を組み合わせてWebページを作ります。</p>

            <h3 class="text-xl font-bold mb-4">コンポーネントの概念</h3>
            <div class="bg-gray-100 p-6 rounded-lg mb-6">
                <p class="mb-4">Webページを「部品」に分けて管理します：</p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <div class="bg-blue-200 p-4 rounded text-center">
                        <div class="text-sm font-bold">Header</div>
                    </div>
                    <div class="bg-green-200 p-4 rounded text-center">
                        <div class="text-sm font-bold">Sidebar</div>
                    </div>
                    <div class="bg-yellow-200 p-4 rounded text-center">
                        <div class="text-sm font-bold">Card</div>
                    </div>
                    <div class="bg-pink-200 p-4 rounded text-center">
                        <div class="text-sm font-bold">Button</div>
                    </div>
                    <div class="bg-purple-200 p-4 rounded text-center">
                        <div class="text-sm font-bold">Footer</div>
                    </div>
                </div>
            </div>

            <h3 class="text-xl font-bold mb-4">JSXの書き方</h3>
            <p class="mb-4">ReactではJSXという、JavaScript内にHTMLのような記法を書けます。</p>

            <div class="code-block p-4 rounded-lg mb-4 font-mono text-sm overflow-x-auto">
<pre><span class="comment">// コンポーネントの例</span>
<span class="keyword">function</span> <span class="component">Greeting</span>() {
  <span class="keyword">const</span> <span class="function">name</span> = <span class="string">"太郎"</span>;

  <span class="keyword">return</span> (
    <span class="tag">&lt;div&gt;</span>
      <span class="tag">&lt;h1&gt;</span>こんにちは、{<span class="function">name</span>}さん<span class="tag">&lt;/h1&gt;</span>
      <span class="tag">&lt;p&gt;</span>Reactへようこそ！<span class="tag">&lt;/p&gt;</span>
    <span class="tag">&lt;/div&gt;</span>
  );
}</pre>
            </div>

            <div class="bg-white p-4 rounded-lg shadow mb-6">
                <h4 class="font-bold mb-2">JSXのポイント</h4>
                <ul class="list-disc list-inside space-y-2 text-sm">
                    <li><code class="bg-gray-200 px-1 rounded">{}</code>の中にJavaScriptの式を書ける</li>
                    <li><code class="bg-gray-200 px-1 rounded">class</code>の代わりに<code class="bg-gray-200 px-1 rounded">className</code>を使う</li>
                    <li>コンポーネント名は大文字で始める（<code class="bg-gray-200 px-1 rounded">Greeting</code>など）</li>
                    <li>return する要素は1つのタグで囲む</li>
                </ul>
            </div>
        </section>

        <!-- セクション2: Next.jsとは -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">Next.jsとは</h2>

            <p class="mb-4">Next.jsはReactをベースにした、より高機能なフレームワークです。</p>

            <div class="grid md:grid-cols-2 gap-4 mb-6">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-blue-600">Reactだけだと</h3>
                    <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                        <li>ルーティング（ページ遷移）を自分で設定</li>
                        <li>設定ファイルが多い</li>
                        <li>SEO対策が難しい</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2 text-green-600">Next.jsなら</h3>
                    <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                        <li>ファイル名がそのままURLになる</li>
                        <li>設定がほぼ不要</li>
                        <li>SEO対策も簡単</li>
                    </ul>
                </div>
            </div>

            <h3 class="text-xl font-bold mb-4">ファイルベースルーティング</h3>
            <p class="mb-4">Next.jsでは、ファイルを置くだけでページが作れます。</p>

            <div class="bg-white p-4 rounded-lg shadow mb-6 font-mono text-sm">
                <div class="mb-2 font-bold text-gray-700">フォルダ構成 → URL</div>
                <div class="space-y-1">
                    <div><span class="text-blue-600">app/page.tsx</span> → <span class="text-gray-500">/</span></div>
                    <div><span class="text-blue-600">app/about/page.tsx</span> → <span class="text-gray-500">/about</span></div>
                    <div><span class="text-blue-600">app/products/page.tsx</span> → <span class="text-gray-500">/products</span></div>
                    <div><span class="text-blue-600">app/products/[id]/page.tsx</span> → <span class="text-gray-500">/products/123</span></div>
                </div>
            </div>
        </section>

        <!-- セクション3: useState -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">useState（状態管理）</h2>

            <p class="mb-4">useStateは、コンポーネント内で変更可能なデータ（状態）を管理するための機能です。</p>

            <div class="code-block p-4 rounded-lg mb-4 font-mono text-sm overflow-x-auto">
<pre><span class="string">"use client"</span>;  <span class="comment">// Next.jsではこれが必要</span>

<span class="keyword">import</span> { useState } <span class="keyword">from</span> <span class="string">"react"</span>;

<span class="keyword">function</span> <span class="component">Counter</span>() {
  <span class="comment">// [現在の値, 値を更新する関数] = useState(初期値)</span>
  <span class="keyword">const</span> [<span class="function">count</span>, <span class="function">setCount</span>] = <span class="function">useState</span>(<span class="number">0</span>);

  <span class="keyword">return</span> (
    <span class="tag">&lt;div&gt;</span>
      <span class="tag">&lt;p&gt;</span>カウント: {<span class="function">count</span>}<span class="tag">&lt;/p&gt;</span>
      <span class="tag">&lt;button</span> onClick={() => <span class="function">setCount</span>(<span class="function">count</span> + <span class="number">1</span>)}<span class="tag">&gt;</span>
        増やす
      <span class="tag">&lt;/button&gt;</span>
    <span class="tag">&lt;/div&gt;</span>
  );
}</pre>
            </div>

            <div class="bg-white p-4 rounded-lg shadow mb-6">
                <h4 class="font-bold mb-2">useStateのポイント</h4>
                <ul class="list-disc list-inside space-y-2 text-sm">
                    <li><code class="bg-gray-200 px-1 rounded">count</code>は現在の値</li>
                    <li><code class="bg-gray-200 px-1 rounded">setCount</code>は値を更新する関数</li>
                    <li>直接<code class="bg-gray-200 px-1 rounded">count = 1</code>と書いてはダメ。必ず<code class="bg-gray-200 px-1 rounded">setCount(1)</code>を使う</li>
                    <li>値が変わると、画面が自動的に再描画される</li>
                </ul>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p><strong>Next.jsでの注意：</strong>useStateを使うコンポーネントは、ファイルの先頭に<code class="bg-white px-1 rounded">"use client"</code>と書く必要があります。</p>
            </div>
        </section>

        <!-- セクション4: useEffect -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">useEffect（副作用）</h2>

            <p class="mb-4">useEffectは、コンポーネントが表示されたときや、特定の値が変わったときに処理を実行します。</p>

            <div class="code-block p-4 rounded-lg mb-4 font-mono text-sm overflow-x-auto">
<pre><span class="string">"use client"</span>;

<span class="keyword">import</span> { useState, useEffect } <span class="keyword">from</span> <span class="string">"react"</span>;

<span class="keyword">function</span> <span class="component">TodoList</span>() {
  <span class="keyword">const</span> [<span class="function">todos</span>, <span class="function">setTodos</span>] = <span class="function">useState</span>([]);

  <span class="comment">// コンポーネントが表示されたときにAPIからデータを取得</span>
  <span class="function">useEffect</span>(() => {
    <span class="keyword">async function</span> <span class="function">fetchTodos</span>() {
      <span class="keyword">const</span> <span class="function">response</span> = <span class="keyword">await</span> <span class="function">fetch</span>(<span class="string">"http://localhost:8000/todos"</span>);
      <span class="keyword">const</span> <span class="function">data</span> = <span class="keyword">await</span> <span class="function">response</span>.<span class="function">json</span>();
      <span class="function">setTodos</span>(<span class="function">data</span>);
    }
    <span class="function">fetchTodos</span>();
  }, []);  <span class="comment">// [] は「最初の1回だけ実行」の意味</span>

  <span class="keyword">return</span> (
    <span class="tag">&lt;ul&gt;</span>
      {<span class="function">todos</span>.<span class="function">map</span>((<span class="function">todo</span>) => (
        <span class="tag">&lt;li</span> key={<span class="function">todo</span>.id}<span class="tag">&gt;</span>{<span class="function">todo</span>.title}<span class="tag">&lt;/li&gt;</span>
      ))}
    <span class="tag">&lt;/ul&gt;</span>
  );
}</pre>
            </div>

            <div class="bg-white p-4 rounded-lg shadow mb-6">
                <h4 class="font-bold mb-2">useEffectの第2引数</h4>
                <ul class="list-disc list-inside space-y-2 text-sm">
                    <li><code class="bg-gray-200 px-1 rounded">[]</code>：最初に1回だけ実行</li>
                    <li><code class="bg-gray-200 px-1 rounded">[count]</code>：countが変わるたびに実行</li>
                    <li>指定なし：毎回実行（通常は使わない）</li>
                </ul>
            </div>
        </section>

        <!-- セクション5: props -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">props（データの受け渡し）</h2>

            <p class="mb-4">親コンポーネントから子コンポーネントにデータを渡すには、propsを使います。</p>

            <div class="code-block p-4 rounded-lg mb-4 font-mono text-sm overflow-x-auto">
<pre><span class="comment">// 子コンポーネント：propsでデータを受け取る</span>
<span class="keyword">function</span> <span class="component">TodoItem</span>({ title, completed }) {
  <span class="keyword">return</span> (
    <span class="tag">&lt;li&gt;</span>
      {completed ? <span class="string">"✅"</span> : <span class="string">"⬜"</span>} {title}
    <span class="tag">&lt;/li&gt;</span>
  );
}

<span class="comment">// 親コンポーネント：propsでデータを渡す</span>
<span class="keyword">function</span> <span class="component">TodoList</span>() {
  <span class="keyword">return</span> (
    <span class="tag">&lt;ul&gt;</span>
      <span class="tag">&lt;TodoItem</span> title=<span class="string">"買い物"</span> completed={<span class="keyword">true</span>} <span class="tag">/&gt;</span>
      <span class="tag">&lt;TodoItem</span> title=<span class="string">"掃除"</span> completed={<span class="keyword">false</span>} <span class="tag">/&gt;</span>
    <span class="tag">&lt;/ul&gt;</span>
  );
}</pre>
            </div>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                <p><strong>ポイント：</strong>propsは親から子への一方通行。子から親にデータを渡すには、関数をpropsで渡します。</p>
            </div>
        </section>

        <!-- セクション6: コードの読み方 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">コードの読み方のコツ</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">1. コンポーネントを見つける</h3>
                    <p class="text-sm text-gray-600">大文字で始まる関数（<code class="bg-gray-200 px-1 rounded">function TodoList</code>）がコンポーネントです。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">2. returnの中がUI</h3>
                    <p class="text-sm text-gray-600"><code class="bg-gray-200 px-1 rounded">return</code>の中のJSXが、実際に画面に表示される内容です。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">3. useStateを探す</h3>
                    <p class="text-sm text-gray-600"><code class="bg-gray-200 px-1 rounded">useState</code>があれば、そのコンポーネントは「状態を持つ」＝動的に変わる部分がある。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">4. mapでリスト表示</h3>
                    <p class="text-sm text-gray-600"><code class="bg-gray-200 px-1 rounded">.map()</code>があれば、配列をループして表示しています。</p>
                </div>
            </div>
        </section>

        <!-- 練習問題 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200 text-green-700">練習問題</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3">Q1. Reactでコンポーネント名を書くときのルールは？</h3>
                    <div class="space-y-2" id="q1">
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q1" value="a" class="mr-3">
                            <span>A. 小文字で始める</span>
                        </label>
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q1" value="b" class="mr-3">
                            <span>B. 大文字で始める</span>
                        </label>
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q1" value="c" class="mr-3">
                            <span>C. どちらでもよい</span>
                        </label>
                    </div>
                    <button onclick="checkAnswer('q1', 'b', this)" class="mt-4 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">答え合わせ</button>
                    <div id="q1-result" class="mt-3 hidden"></div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3">Q2. useStateで値を変更するとき、正しい方法は？</h3>
                    <div class="code-block p-2 rounded mb-3 font-mono text-sm">
<pre><span class="keyword">const</span> [<span class="function">count</span>, <span class="function">setCount</span>] = <span class="function">useState</span>(<span class="number">0</span>);</pre>
                    </div>
                    <div class="space-y-2" id="q2">
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q2" value="a" class="mr-3">
                            <span>A. count = 1</span>
                        </label>
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q2" value="b" class="mr-3">
                            <span>B. setCount(1)</span>
                        </label>
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q2" value="c" class="mr-3">
                            <span>C. count.set(1)</span>
                        </label>
                    </div>
                    <button onclick="checkAnswer('q2', 'b', this)" class="mt-4 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">答え合わせ</button>
                    <div id="q2-result" class="mt-3 hidden"></div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3">Q3. useEffect(() => {...}, []) の [] は何を意味する？</h3>
                    <div class="space-y-2" id="q3">
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q3" value="a" class="mr-3">
                            <span>A. 毎回実行する</span>
                        </label>
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q3" value="b" class="mr-3">
                            <span>B. 最初の1回だけ実行する</span>
                        </label>
                        <label class="flex items-center p-2 rounded hover:bg-gray-50 cursor-pointer">
                            <input type="radio" name="q3" value="c" class="mr-3">
                            <span>C. 実行しない</span>
                        </label>
                    </div>
                    <button onclick="checkAnswer('q3', 'b', this)" class="mt-4 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">答え合わせ</button>
                    <div id="q3-result" class="mt-3 hidden"></div>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">まとめ</h2>
            <div class="bg-purple-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-purple-600 mr-2">✓</span>
                        <span>Reactはコンポーネント（部品）を組み合わせてUIを作る</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-purple-600 mr-2">✓</span>
                        <span>Next.jsはファイル名がそのままURLになる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-purple-600 mr-2">✓</span>
                        <span><code class="bg-white px-1 rounded">useState</code>で状態を管理する</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-purple-600 mr-2">✓</span>
                        <span><code class="bg-white px-1 rounded">useEffect</code>で初期処理やデータ取得を行う</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-purple-600 mr-2">✓</span>
                        <span>propsで親から子にデータを渡す</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="python-basics.php" class="flex items-center text-gray-600 hover:text-purple-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：Python基礎
            </a>
            <a href="fastapi-basics.php" class="flex items-center bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700">
                次へ：FastAPI基礎
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

    <script>
        function checkAnswer(questionId, correctAnswer, button) {
            const selected = document.querySelector(`input[name="${questionId}"]:checked`);
            const resultDiv = document.getElementById(`${questionId}-result`);

            if (!selected) {
                resultDiv.innerHTML = '<p class="text-yellow-600">選択肢を選んでください</p>';
                resultDiv.classList.remove('hidden');
                return;
            }

            if (selected.value === correctAnswer) {
                resultDiv.innerHTML = '<p class="text-green-600 font-bold">正解です！</p>';
            } else {
                resultDiv.innerHTML = '<p class="text-red-600">不正解です。もう一度考えてみましょう。</p>';
            }
            resultDiv.classList.remove('hidden');
        }
    </script>

<?php include 'includes/footer.php'; ?>
