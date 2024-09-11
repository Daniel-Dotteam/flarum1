<?php

/**
* @package   s9e\TextFormatter
* @copyright Copyright (c) 2010-2023 The s9e authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
class Renderer_333fe54bec1f6bee76c4bb68c953d7a70bd19bd1 extends \s9e\TextFormatter\Renderers\PHP
{
	protected $params=['DISCUSSION_URL'=>'https://devcom-u23253.vm.elestio.app/d/','L_WROTE'=>'','PROFILE_URL'=>'https://devcom-u23253.vm.elestio.app/u/'];
	protected function renderNode(\DOMNode $node)
	{
		switch($node->nodeName){case'B':$this->out.='<b>';$this->at($node);$this->out.='</b>';break;case'CENTER':$this->out.='<div style="text-align:center">';$this->at($node);$this->out.='</div>';break;case'CODE':$this->out.='<pre><code';if($node->hasAttribute('lang'))$this->out.=' class="language-'.htmlspecialchars($node->getAttribute('lang'),2).'"';$this->out.='>';$this->at($node);$this->out.='</code><script async="" crossorigin="anonymous" data-hljs-style="github" integrity="sha384-E9ssooeJ4kPel3JD7st0BgS50OLWFEdg4ZOp8lYPy52ctQazOIV37TCvzV8l4cYG" src="https://cdn.jsdelivr.net/gh/s9e/hljs-loader@1.0.34/loader.min.js"></script><script>
                    if(window.hljsLoader && !document.currentScript.parentNode.hasAttribute(\'data-s9e-livepreview-onupdate\')) {
                        window.hljsLoader.highlightBlocks(document.currentScript.parentNode);
                    }
                </script></pre>';break;case'COLOR':$this->out.='<span style="color:'.htmlspecialchars($node->getAttribute('color'),2).'">';$this->at($node);$this->out.='</span>';break;case'DEL':$this->out.='<del>';$this->at($node);$this->out.='</del>';break;case'EMAIL':$this->out.='<a href="mailto:'.htmlspecialchars($node->getAttribute('email'),2).'">';$this->at($node);$this->out.='</a>';break;case'ESC':$this->at($node);break;case'GROUPMENTION':$this->out.='<span';if($node->getAttribute('deleted')!=1)if($this->xpath->evaluate('string(@color)!=\'\'',$node))$this->out.=' class="GroupMention GroupMention--colored" style="--color:'.htmlspecialchars($node->getAttribute('color'),2).';"';else$this->out.=' class="GroupMention"';else$this->out.=' class="GroupMention GroupMention--deleted"';$this->out.='><span class="GroupMention-name">@'.htmlspecialchars($node->getAttribute('groupname'),0).'</span>';if($this->xpath->evaluate('string(@icon)!=\'\'',$node))$this->out.='<i class="icon '.htmlspecialchars($node->getAttribute('icon'),2).'"></i>';$this->out.='</span>';break;case'I':$this->out.='<i>';$this->at($node);$this->out.='</i>';break;case'IMG':$this->out.='<img src="'.htmlspecialchars($node->getAttribute('src'),2).'" title="'.htmlspecialchars($node->getAttribute('title'),2).'" alt="'.htmlspecialchars($node->getAttribute('alt'),2).'"';if($node->hasAttribute('height'))$this->out.=' height="'.htmlspecialchars($node->getAttribute('height'),2).'"';if($node->hasAttribute('width'))$this->out.=' width="'.htmlspecialchars($node->getAttribute('width'),2).'"';$this->out.='>';break;case'LI':$this->out.='<li>';$this->at($node);$this->out.='</li>';break;case'LIST':if(!$node->hasAttribute('type')){$this->out.='<ul>';$this->at($node);$this->out.='</ul>';}elseif(str_starts_with($node->getAttribute('type'),'decimal')||str_starts_with($node->getAttribute('type'),'lower')||str_starts_with($node->getAttribute('type'),'upper')){$this->out.='<ol style="list-style-type:'.htmlspecialchars($node->getAttribute('type'),2).'"';if($node->hasAttribute('start'))$this->out.=' start="'.htmlspecialchars($node->getAttribute('start'),2).'"';$this->out.='>';$this->at($node);$this->out.='</ol>';}else{$this->out.='<ul style="list-style-type:'.htmlspecialchars($node->getAttribute('type'),2).'">';$this->at($node);$this->out.='</ul>';}break;case'POSTMENTION':if($node->getAttribute('deleted')!=1)$this->out.='<a href="'.htmlspecialchars($this->params['DISCUSSION_URL'].$node->getAttribute('discussionid'),2).'/'.htmlspecialchars($node->getAttribute('number'),2).'" class="PostMention" data-id="'.htmlspecialchars($node->getAttribute('id'),2).'">'.htmlspecialchars($node->getAttribute('displayname'),0).'</a>';else$this->out.='<span class="PostMention PostMention--deleted" data-id="'.htmlspecialchars($node->getAttribute('id'),2).'">'.htmlspecialchars($node->getAttribute('displayname'),0).'</span>';break;case'QUOTE':$this->out.='<blockquote';if(!$node->hasAttribute('author'))$this->out.=' class="uncited"';$this->out.='><div>';if($node->hasAttribute('author'))$this->out.='<cite>'.htmlspecialchars($node->getAttribute('author'),0).' '.htmlspecialchars($this->params['L_WROTE'],0).'</cite>';$this->at($node);$this->out.='</div></blockquote>';break;case'S':$this->out.='<s>';$this->at($node);$this->out.='</s>';break;case'SIZE':$this->out.='<span style="font-size:'.htmlspecialchars($node->getAttribute('size'),2).'px">';$this->at($node);$this->out.='</span>';break;case'U':$this->out.='<u>';$this->at($node);$this->out.='</u>';break;case'URL':$this->out.='<a href="'.htmlspecialchars($node->getAttribute('url'),2).'"';if($node->hasAttribute('rel'))$this->out.=' rel="'.htmlspecialchars($node->getAttribute('rel'),2).'"';if($node->hasAttribute('target'))$this->out.=' target="'.htmlspecialchars($node->getAttribute('target'),2).'"';if($node->hasAttribute('title'))$this->out.=' title="'.htmlspecialchars($node->getAttribute('title'),2).'"';$this->out.='>';$this->at($node);$this->out.='</a>';break;case'USERMENTION':if($node->getAttribute('deleted')!=1)$this->out.='<a href="'.htmlspecialchars($this->params['PROFILE_URL'].$node->getAttribute('slug'),2).'" class="UserMention">@'.htmlspecialchars($node->getAttribute('displayname'),0).'</a>';else$this->out.='<span class="UserMention UserMention--deleted">@'.htmlspecialchars($node->getAttribute('displayname'),0).'</span>';break;case'br':$this->out.='<br>';break;case'e':case'i':case's':break;case'p':$this->out.='<p>';$this->at($node);$this->out.='</p>';break;default:$this->at($node);}
	}
	/** {@inheritdoc} */
	public $enableQuickRenderer=true;
	/** {@inheritdoc} */
	protected $static=['/B'=>'</b>','/CENTER'=>'</div>','/CODE'=>'</code><script async="" crossorigin="anonymous" data-hljs-style="github" integrity="sha384-E9ssooeJ4kPel3JD7st0BgS50OLWFEdg4ZOp8lYPy52ctQazOIV37TCvzV8l4cYG" src="https://cdn.jsdelivr.net/gh/s9e/hljs-loader@1.0.34/loader.min.js"></script><script>
                    if(window.hljsLoader && !document.currentScript.parentNode.hasAttribute(\'data-s9e-livepreview-onupdate\')) {
                        window.hljsLoader.highlightBlocks(document.currentScript.parentNode);
                    }
                </script></pre>','/COLOR'=>'</span>','/DEL'=>'</del>','/EMAIL'=>'</a>','/ESC'=>'','/I'=>'</i>','/LI'=>'</li>','/QUOTE'=>'</div></blockquote>','/S'=>'</s>','/SIZE'=>'</span>','/U'=>'</u>','/URL'=>'</a>','B'=>'<b>','CENTER'=>'<div style="text-align:center">','DEL'=>'<del>','ESC'=>'','I'=>'<i>','LI'=>'<li>','S'=>'<s>','U'=>'<u>'];
	/** {@inheritdoc} */
	protected $dynamic=['COLOR'=>['(^[^ ]+(?> (?!color=)[^=]+="[^"]*")*(?> color="([^"]*)")?.*)s','<span style="color:$1">'],'EMAIL'=>['(^[^ ]+(?> (?!email=)[^=]+="[^"]*")*(?> email="([^"]*)")?.*)s','<a href="mailto:$1">'],'IMG'=>['(^[^ ]+(?> (?!(?:alt|height|src|title|width)=)[^=]+="[^"]*")*(?> alt="([^"]*)")?(?> (?!(?:height|src|title|width)=)[^=]+="[^"]*")*( height="[^"]*")?(?> (?!(?:src|title|width)=)[^=]+="[^"]*")*(?> src="([^"]*)")?(?> (?!(?:title|width)=)[^=]+="[^"]*")*(?> title="([^"]*)")?(?> (?!width=)[^=]+="[^"]*")*( width="[^"]*")?.*)s','<img src="$3" title="$4" alt="$1"$2$5>'],'SIZE'=>['(^[^ ]+(?> (?!size=)[^=]+="[^"]*")*(?> size="([^"]*)")?.*)s','<span style="font-size:$1px">'],'URL'=>['(^[^ ]+(?> (?!(?:rel|t(?:arget|itle)|url)=)[^=]+="[^"]*")*( rel="[^"]*")?(?> (?!(?:t(?:arget|itle)|url)=)[^=]+="[^"]*")*( target="[^"]*")?(?> (?!(?:title|url)=)[^=]+="[^"]*")*( title="[^"]*")?(?> (?!url=)[^=]+="[^"]*")*(?> url="([^"]*)")?.*)s','<a href="$4"$1$2$3>']];
	/** {@inheritdoc} */
	protected $quickRegexp='(<(?:(?!/)((?:IMG|POSTMENTION|USERMENTION))(?: [^>]*)?>.*?</\\1|(/?(?!br/|p>)[^ />]+)[^>]*?(/)?)>)s';
	/** {@inheritdoc} */
	protected $quickRenderingTest='((?<=<)(?:[!?]|GROUPMENTION[ />]))';
	/** {@inheritdoc} */
	protected function renderQuickTemplate($id, $xml)
	{
		$attributes=$this->matchAttributes($xml);
		$html='';switch($id){case'/LIST':$attributes=array_pop($this->attributes);if(!isset($attributes['type']))$html.='</ul>';elseif(str_starts_with($attributes['type']??'','decimal')||str_starts_with($attributes['type']??'','lower')||str_starts_with($attributes['type']??'','upper'))$html.='</ol>';else$html.='</ul>';break;case'CODE':$html.='<pre><code';if(isset($attributes['lang']))$html.=' class="language-'.$attributes['lang'].'"';$html.='>';break;case'LIST':$attributes+=['type'=>null];if(!isset($attributes['type']))$html.='<ul>';elseif(str_starts_with($attributes['type']??'','decimal')||str_starts_with($attributes['type']??'','lower')||str_starts_with($attributes['type']??'','upper')){$html.='<ol style="list-style-type:'.$attributes['type'].'"';if(isset($attributes['start']))$html.=' start="'.$attributes['start'].'"';$html.='>';}else$html.='<ul style="list-style-type:'.$attributes['type'].'">';$this->attributes[]=$attributes;break;case'POSTMENTION':$attributes+=['deleted'=>null,'discussionid'=>null,'number'=>null,'id'=>null,'displayname'=>null];if(htmlspecialchars_decode($attributes['deleted']??'')!=1)$html.='<a href="'.htmlspecialchars($this->params['DISCUSSION_URL'].htmlspecialchars_decode($attributes['discussionid']??''),2).'/'.$attributes['number'].'" class="PostMention" data-id="'.$attributes['id'].'">'.str_replace('&quot;','"',$attributes['displayname']??'').'</a>';else$html.='<span class="PostMention PostMention--deleted" data-id="'.$attributes['id'].'">'.str_replace('&quot;','"',$attributes['displayname']??'').'</span>';break;case'QUOTE':$html.='<blockquote';if(!isset($attributes['author']))$html.=' class="uncited"';$html.='><div>';if(isset($attributes['author']))$html.='<cite>'.str_replace('&quot;','"',$attributes['author']??'').' '.htmlspecialchars($this->params['L_WROTE'],0).'</cite>';break;case'USERMENTION':$attributes+=['deleted'=>null,'slug'=>null,'displayname'=>null];if(htmlspecialchars_decode($attributes['deleted']??'')!=1)$html.='<a href="'.htmlspecialchars($this->params['PROFILE_URL'].htmlspecialchars_decode($attributes['slug']??''),2).'" class="UserMention">@'.str_replace('&quot;','"',$attributes['displayname']??'').'</a>';else$html.='<span class="UserMention UserMention--deleted">@'.str_replace('&quot;','"',$attributes['displayname']??'').'</span>';}

		return $html;
	}
}