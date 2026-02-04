<?php
$page_title = 'Todoアプリ - フロントエンド編 - AIでWebアプリ開発を学ぼう | AI Tech Stack';
$current_page = 'tutorial';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }';
$section_name = '第3部：実践チュートリアル';
$step_number = 15;
$total_steps = 20;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">Todoアプリ - フロントエンド編</h1>

        <!-- イントロ -->
        <div class="bg-green-50 border-l-4 border-green-500 p-6 mb-8">
            <p class="text-lg">Next.jsを使って、Todoアプリの画面を作成します。まずはモックデータで動く状態を作り、次のページでAPIと連携させます。</p>
        </div>

        <!-- 完成イメージ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">完成イメージ</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-bold mb-4 text-center">Todoリスト</h3>
                <div class="max-w-md mx-auto">
                    <div class="flex mb-4">
                        <input type="text" placeholder="新しいTodoを入力..." class="flex-1 border rounded-l-lg px-4 py-2">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-r-lg">追加</button>
                    </div>
                    <ul class="space-y-2">
                        <li class="flex items-center justify-between p-3 bg-gray-50 rounded">
                            <div class="flex items-center">
                                <input type="checkbox" class="mr-3">
                                <span>買い物に行く</span>
                            </div>
                            <button class="text-red-500">削除</button>
                        </li>
                        <li class="flex items-center justify-between p-3 bg-gray-50 rounded">
                            <div class="flex items-center">
                                <input type="checkbox" checked class="mr-3">
                                <span class="line-through text-gray-400">部屋を掃除する</span>
                            </div>
                            <button class="text-red-500">削除</button>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Step 1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">Step 1: Todoの型定義を作成</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3 text-purple-600">AIへの指示</h3>
                <div class="code-block p-4 rounded font-mono text-sm">
<pre>frontend/src/types/todo.ts を作成して、
Todoの型定義を追加してください。

Todo型:
- id: number
- title: string
- completed: boolean</pre>
                </div>
            </div>
        </section>

        <!-- Step 2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">Step 2: Todoリストコンポーネントを作成</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3 text-purple-600">AIへの指示</h3>
                <div class="code-block p-4 rounded font-mono text-sm">
<pre>frontend/src/app/page.tsx を編集して、
Todoリストアプリを作成してください。

機能:
1. Todoの一覧表示
2. 新しいTodoの追加フォーム
3. Todoの完了/未完了の切り替え（チェックボックス）
4. Todoの削除ボタン
5. 完了したTodoは取り消し線を表示

まずはモックデータで動くようにしてください。
APIとの連携は後で行います。

使用技術:
- useState で状態管理
- Tailwind CSS でスタイリング</pre>
                </div>
            </div>
        </section>

        <!-- 完成コード -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">完成コード例</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">src/types/todo.ts</h3>
                <div class="code-block p-4 rounded font-mono text-sm">
<pre><span class="text-purple-400">export interface</span> <span class="text-blue-400">Todo</span> {
  id: <span class="text-blue-400">number</span>;
  title: <span class="text-blue-400">string</span>;
  completed: <span class="text-blue-400">boolean</span>;
}</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">src/app/page.tsx</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400">"use client"</span>;

<span class="text-purple-400">import</span> { useState } <span class="text-purple-400">from</span> <span class="text-green-400">"react"</span>;
<span class="text-purple-400">import</span> { Todo } <span class="text-purple-400">from</span> <span class="text-green-400">"@/types/todo"</span>;

<span class="text-gray-400">// モックデータ</span>
<span class="text-purple-400">const</span> initialTodos: Todo[] = [
  { id: <span class="text-yellow-400">1</span>, title: <span class="text-green-400">"買い物に行く"</span>, completed: <span class="text-purple-400">false</span> },
  { id: <span class="text-yellow-400">2</span>, title: <span class="text-green-400">"部屋を掃除する"</span>, completed: <span class="text-purple-400">true</span> },
];

<span class="text-purple-400">export default function</span> <span class="text-blue-400">Home</span>() {
  <span class="text-purple-400">const</span> [todos, setTodos] = useState&lt;Todo[]&gt;(initialTodos);
  <span class="text-purple-400">const</span> [newTitle, setNewTitle] = useState(<span class="text-green-400">""</span>);

  <span class="text-gray-400">// Todo追加</span>
  <span class="text-purple-400">const</span> addTodo = () => {
    <span class="text-purple-400">if</span> (!newTitle.trim()) <span class="text-purple-400">return</span>;
    <span class="text-purple-400">const</span> newTodo: Todo = {
      id: Date.now(),
      title: newTitle,
      completed: <span class="text-purple-400">false</span>,
    };
    setTodos([...todos, newTodo]);
    setNewTitle(<span class="text-green-400">""</span>);
  };

  <span class="text-gray-400">// 完了切り替え</span>
  <span class="text-purple-400">const</span> toggleTodo = (id: <span class="text-blue-400">number</span>) => {
    setTodos(todos.map(todo =>
      todo.id === id ? { ...todo, completed: !todo.completed } : todo
    ));
  };

  <span class="text-gray-400">// 削除</span>
  <span class="text-purple-400">const</span> deleteTodo = (id: <span class="text-blue-400">number</span>) => {
    setTodos(todos.filter(todo => todo.id !== id));
  };

  <span class="text-purple-400">return</span> (
    <span class="text-cyan-400">&lt;main</span> className=<span class="text-green-400">"min-h-screen p-8 max-w-md mx-auto"</span><span class="text-cyan-400">&gt;</span>
      <span class="text-cyan-400">&lt;h1</span> className=<span class="text-green-400">"text-2xl font-bold mb-6 text-center"</span><span class="text-cyan-400">&gt;</span>
        Todoリスト
      <span class="text-cyan-400">&lt;/h1&gt;</span>

      <span class="text-gray-400">{/* 追加フォーム */}</span>
      <span class="text-cyan-400">&lt;div</span> className=<span class="text-green-400">"flex mb-6"</span><span class="text-cyan-400">&gt;</span>
        <span class="text-cyan-400">&lt;input</span>
          type=<span class="text-green-400">"text"</span>
          value={newTitle}
          onChange={(e) => setNewTitle(e.target.value)}
          onKeyDown={(e) => e.key === <span class="text-green-400">"Enter"</span> && addTodo()}
          placeholder=<span class="text-green-400">"新しいTodoを入力..."</span>
          className=<span class="text-green-400">"flex-1 border rounded-l-lg px-4 py-2"</span>
        <span class="text-cyan-400">/&gt;</span>
        <span class="text-cyan-400">&lt;button</span>
          onClick={addTodo}
          className=<span class="text-green-400">"bg-blue-500 text-white px-4 py-2
            rounded-r-lg hover:bg-blue-600"</span>
        <span class="text-cyan-400">&gt;</span>
          追加
        <span class="text-cyan-400">&lt;/button&gt;</span>
      <span class="text-cyan-400">&lt;/div&gt;</span>

      <span class="text-gray-400">{/* Todoリスト */}</span>
      <span class="text-cyan-400">&lt;ul</span> className=<span class="text-green-400">"space-y-2"</span><span class="text-cyan-400">&gt;</span>
        {todos.map((todo) => (
          <span class="text-cyan-400">&lt;li</span>
            key={todo.id}
            className=<span class="text-green-400">"flex items-center justify-between
              p-3 bg-gray-50 rounded"</span>
          <span class="text-cyan-400">&gt;</span>
            <span class="text-cyan-400">&lt;div</span> className=<span class="text-green-400">"flex items-center"</span><span class="text-cyan-400">&gt;</span>
              <span class="text-cyan-400">&lt;input</span>
                type=<span class="text-green-400">"checkbox"</span>
                checked={todo.completed}
                onChange={() => toggleTodo(todo.id)}
                className=<span class="text-green-400">"mr-3"</span>
              <span class="text-cyan-400">/&gt;</span>
              <span class="text-cyan-400">&lt;span</span>
                className={todo.completed ?
                  <span class="text-green-400">"line-through text-gray-400"</span> : <span class="text-green-400">""</span>}
              <span class="text-cyan-400">&gt;</span>
                {todo.title}
              <span class="text-cyan-400">&lt;/span&gt;</span>
            <span class="text-cyan-400">&lt;/div&gt;</span>
            <span class="text-cyan-400">&lt;button</span>
              onClick={() => deleteTodo(todo.id)}
              className=<span class="text-green-400">"text-red-500 hover:text-red-700"</span>
            <span class="text-cyan-400">&gt;</span>
              削除
            <span class="text-cyan-400">&lt;/button&gt;</span>
          <span class="text-cyan-400">&lt;/li&gt;</span>
        ))}
      <span class="text-cyan-400">&lt;/ul&gt;</span>
    <span class="text-cyan-400">&lt;/main&gt;</span>
  );
}</pre>
                </div>
            </div>
        </section>

        <!-- 動作確認 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">Step 3: 動作確認</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <ol class="list-decimal list-inside space-y-3">
                    <li>フロントエンドサーバーを起動: <code class="bg-gray-200 px-2 py-1 rounded">npm run dev</code></li>
                    <li>ブラウザで <a href="http://localhost:3000" class="text-blue-600 hover:underline">http://localhost:3000</a> を開く</li>
                    <li>以下を確認:
                        <ul class="list-disc list-inside ml-6 mt-2 space-y-1">
                            <li>Todoが一覧表示されている</li>
                            <li>新しいTodoを追加できる</li>
                            <li>チェックボックスで完了/未完了を切り替えられる</li>
                            <li>削除ボタンで削除できる</li>
                        </ul>
                    </li>
                </ol>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p><strong>注意：</strong>この時点ではデータはメモリ上にあるため、ページをリロードすると初期状態に戻ります。次のページでAPIと連携して永続化します。</p>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="tutorial-todo-backend.php" class="flex items-center text-gray-600 hover:text-green-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：バックエンド編
            </a>
            <a href="tutorial-todo-integration.php" class="flex items-center bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700">
                次へ：連携編
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
