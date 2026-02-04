<?php
$page_title = 'パフォーマンス改善 - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'architecture';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第4部：AIとフロントエンド高度化';
$step_number = 12;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">パフォーマンス改善</h1>

        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">Core Web Vitals、バンドルサイズ、レンダリング最適化など、フロントエンドのパフォーマンスをAIと一緒に改善します。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Core Web Vitals</h2>
            <div class="grid md:grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-green-600">LCP</h3>
                    <p class="text-sm text-gray-600">Largest Contentful Paint</p>
                    <p class="text-xs mt-2">目標: 2.5秒以内</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-yellow-600">INP</h3>
                    <p class="text-sm text-gray-600">Interaction to Next Paint</p>
                    <p class="text-xs mt-2">目標: 200ms以内</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">CLS</h3>
                    <p class="text-sm text-gray-600">Cumulative Layout Shift</p>
                    <p class="text-xs mt-2">目標: 0.1以下</p>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">AIに分析を依頼</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">パフォーマンス診断</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>このNext.jsコンポーネントのパフォーマンスを分析してください。

```tsx
export default function ProductList() {
  const [products, setProducts] = useState([]);

  useEffect(() => {
    fetch('/api/products').then(res => res.json())
      .then(data => setProducts(data));
  }, []);

  return (
    &lt;div&gt;
      {products.map(p => (
        &lt;img src={p.image} alt={p.name} /&gt;
      ))}
    &lt;/div&gt;
  );
}
```

改善点を指摘してください。</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">改善後</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>import Image from 'next/image';

export default async function ProductList() {
  // Server Componentでデータ取得
  const products = await fetch('/api/products').then(r => r.json());

  return (
    &lt;div&gt;
      {products.map(p => (
        &lt;Image
          src={p.image}
          alt={p.name}
          width={300}
          height={200}
          loading="lazy"  // 遅延読み込み
          placeholder="blur"
        /&gt;
      ))}
    &lt;/div&gt;
  );
}</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">バンドルサイズ削減</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">AIへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>バンドルサイズを削減する方法を教えてください。

現在のサイズ:
- First Load JS: 450kB
- lodash: 70kB
- moment: 65kB
- 大きな画像コンポーネント: 120kB</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">最適化テクニック</h3>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-start"><span class="text-green-500 mr-2">✓</span>lodash → lodash-es + tree shaking</li>
                    <li class="flex items-start"><span class="text-green-500 mr-2">✓</span>moment → date-fns または dayjs</li>
                    <li class="flex items-start"><span class="text-green-500 mr-2">✓</span>dynamic import で遅延読み込み</li>
                    <li class="flex items-start"><span class="text-green-500 mr-2">✓</span>next/dynamic でコンポーネント分割</li>
                </ul>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>Core Web Vitals</strong> を意識した改善</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>Image最適化</strong> - next/image、lazy loading</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>バンドル分割</strong> - dynamic import活用</span></li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="advanced-api.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                API設計の高度化
            </a>
            <a href="complex-ui.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：複雑なUIの実装
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
