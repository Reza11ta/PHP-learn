# PHP-learn
A comprehensive PHP tutorial repository covering everything from beginner to advanced topics, with practical examples and clear explanations.

> 💡 For the best experience, install the **Highlight** extension in VS Code.  
> After installation, open your VS Code `settings.json` and add the provided configuration from this repository.  
> This will enable beautiful custom colors for comments.

✅ Just search for `highlight` in the Extensions panel and install the one by **fabiospampinato**.  
🛠️ Then open your settings by pressing `Ctrl + Shift + P` → **Preferences: Open User Settings (JSON)**,  
and paste this code snippet into your settings:

<details>
<summary>Click to show the full highlight config</summary>

```json
"highlight.regexes": {
  // Default highlights
  "((?:<!-- *)?(?:#|// @|//|./\\*+|<!--|--|\\* @|{!|{{!--|{{!) *TODO(?:\\s*\\([^)]+\\))?:?)((?!\\w)(?: *-->| *\\*/| *!}| *--}}| *}}|(?= *(?:[^:]//|/\\*+|<!--|@|--|{!|{{!--|{{!))|(?: +[^\\n@]*?)(?= *(?:[^:]//|/\\*+|<!--|@|--(?!>)|{!|{{!--|{{!))|(?: +[^@\\n]+)?))": {
    "filterFileRegex": ".*(?<!CHANGELOG.md)$",
    "decorations": [
      {
        "overviewRulerColor": "#ffcc00",
        "backgroundColor": "#ffcc00",
        "color": "#1f1f1f",
        "fontWeight": "bold"
      },
      {
        "backgroundColor": "#ffcc00",
        "color": "#1f1f1f"
      }
    ]
  },
  "((?:<!-- *)?(?:#|// @|//|./\\*+|<!--|--|\\* @|{!|{{!--|{{!) *(?:FIXME|FIX|BUG|UGLY|DEBUG|HACK)(?:\\s*\\([^)]+\\))?:?)((?!\\w)(?: *-->| *\\*/| *!}| *--}}| *}}|(?= *(?:[^:]//|/\\*+|<!--|@|--|{!|{{!--|{{!))|(?: +[^\\n@]*?)(?= *(?:[^:]//|/\\*+|<!--|@|--(?!>)|{!|{{!--|{{!))|(?: +[^@\\n]+)?))": {
    "filterFileRegex": ".*(?<!CHANGELOG.md)$",
    "decorations": [
      {
        "overviewRulerColor": "#cc0000",
        "backgroundColor": "#cc0000",
        "color": "#1f1f1f",
        "fontWeight": "bold"
      },
      {
        "backgroundColor": "#cc0000",
        "color": "#1f1f1f"
      }
    ]
  },
  "((?:<!-- *)?(?:#|// @|//|./\\*+|<!--|--|\\* @|{!|{{!--|{{!) *(?:REVIEW|OPTIMIZE|TSC)(?:\\s*\\([^)]+\\))?:?)((?!\\w)(?: *-->| *\\*/| *!}| *--}}| *}}|(?= *(?:[^:]//|/\\*+|<!--|@|--|{!|{{!--|{{!))|(?: +[^\\n@]*?)(?= *(?:[^:]//|/\\*+|<!--|@|--(?!>)|{!|{{!--|{{!))|(?: +[^@\\n]+)?))": {
    "filterFileRegex": ".*(?<!CHANGELOG.md)$",
    "decorations": [
      {
        "overviewRulerColor": "#00ccff",
        "backgroundColor": "#00ccff",
        "color": "#1f1f1f",
        "fontWeight": "bold"
      },
      {
        "backgroundColor": "#00ccff",
        "color": "#1f1f1f"
      }
    ]
  },
  "((?:<!-- *)?(?:#|// @|//|./\\*+|<!--|--|\\* @|{!|{{!--|{{!) *(?:IDEA)(?:\\s*\\([^)]+\\))?:?)((?!\\w)(?: *-->| *\\*/| *!}| *--}}| *}}|(?= *(?:[^:]//|/\\*+|<!--|@|--|{!|{{!--|{{!))|(?: +[^\\n@]*?)(?= *(?:[^:]//|/\\*+|<!--|@|--(?!>)|{!|{{!--|{{!))|(?: +[^@\\n]+)?))": {
    "filterFileRegex": ".*(?<!CHANGELOG.md)$",
    "decorations": [
      {
        "overviewRulerColor": "#cc00cc",
        "backgroundColor": "#cc00cc",
        "color": "#1f1f1f",
        "fontWeight": "bold"
      },
      {
        "backgroundColor": "#cc00cc",
        "color": "#1f1f1f"
      }
    ]
  },

  // Custom coloring for this repo
  "(?<=//\\[red\\] )(.*)": {
    "decorations": [
      {
        "color": "#F44747"
      }
    ]
  },
  "(?<=//\\[w\\] )(.*)": {
    "decorations": [
      {
        "color": "#ffffff"
      }
    ]
  },
  "(?<=//\\[gd\\] )(.*)": {
    "decorations": [
      {
        "color": "#cc00cc"
      }
    ]
  }
}

</details>
🎯 If you already have highlight.regexes in your settings, feel free to only copy the custom coloring part (from // Custom coloring onwards) and merge it into your own config.


📸 Instagram: [@reza1110ta](https://instagram.com/reza1110ta)
