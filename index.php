
<?php
    include 'Connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <ol style = "background-color: aquamarine">
    <title>Travel Agency</title>
    <h1> Travel Agency CPS510 Assignment 9: Itay Fainer, Alex Lee, Matthew Ing</h1>
    <br>
<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJQBDgMBEQACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAAAQIDBAUGB//EAEgQAAEDAgQCBgUHBwsFAAAAAAEAAgMEEQUSITFBUQYTImFxkRQygaHRFSMzQlKxwSQ0VHKT4fAHFiU1RGJ0gpKUslWEosLx/8QAGwEAAgMBAQEAAAAAAAAAAAAAAAECAwQFBgf/xAA7EQACAgECAwUFBwMEAQUAAAAAAQIDEQQhEjFBBRNRYZEVIjKBsRQjUnGh0fBCweEGMzTxwiQ1YmNy/9oADAMBAAIRAxEAPwD3FACFAAmIEABQAiAEKaARAgQAIAEAHjugbGl4Hf4JiyBc7g3zSAQ578B3p7CEIfwPuQBDUPma3sNLr/ZCnBRzuQlnBHT1MuYMmheL7OspThHmmKMnyZbKqLAQIEACYCIAECBAAgBqYAgQIARAAmAIARAAgC4qS4QoAExAgAKAEQAhTQCIECABADXPsbDU8BzQAmRzvWOnIIELlaOFvBAxr5o2es4DuKai3yBySKz6+Np7LC7vurFUyt2IidiD+EQt4qfcrxId4J8oP4xg+1HcLxH3rJGYjGT2mFveNVF0NDVq6lmORkovG4FVuLRNPI9IGCABMBEAFxsdClkQiYCoAagATECAEQAJgCAEQAIAuKkuEKABMQIACgBEAIU0AiBAgBjiXnKzYblADmgAacUARzTsiFnG7uQUoxchOSXMpTVT33+qCr41pFTm3yKxJO5VhARMQ0piEQAhTAGucx12uIPNDinzBPBdp8QAs2f2OAVE6fwlkbPEvsOcXaQRzBWflzLQJ0TQFSorA3sx+tzVkK88yuU8GbFWGGr62UuLSC063WiVXFHESpTxLLNiN7JWB8cmZu+iySTi8MvTTWw6z9SHaciEth7iEvBOjTt3JgGdo0N78rIEPSAamAJgCAEQAIAuKkuEKABMQIACgBEAIU0AiBDXEk5R7e5AB2WN10HFG4FSerO0O3NWwr8Stz8Co7XfU81eitjTsmIRACJiGlMQiAEKYCFMQ1MY+GeSB94zpxChKEZLcUZNGlBWxzdl1mv5c1mlVKJfGafMndFE/UtY4d7QVWm0SwiMUlOHBwhYHNNwbbKfeT5ZI8KJgANgoEhUAImAhAIIOqBDSHNuWi/Mc0ADSHbIAVAAmAiABAFxUlwhQAJiBAAUANvzQAhI5jzQGUMfI1o314BSSbE2iA1LGi0YueZU1W3zIcZXkkc/1iT3K1RSIN5IipIQhTExqYhEAVqqsp6Rvz8zGncC+p9ilGMpvYot1FVSzY8GRUdJoGyZIqd7iRcFxtdWqlKSjJ7s5s+14f0Rz5lWo6VmBt5aVrcx0tIfgoanuaF78v0Kl2vY3/tr1/wPi6XYeXATB7CeI7QVLvo6TTNEO00/jg1+pt01VBVMD4JGyDfQ2VuGllm+u6u1fdskTRYNcmIRMRNFWTQ6MdmHJyrlVGRNTki3HikbvpI3N/VN1S9O1yZYrV1JhiNN9t3+lQ7mfgPvIjX4nTt9XM7wFk1RMHYinLikpNo2NaO/VXR066lbtZWdXVTj9M4eFlaqYeBDjkIK6pab9e726pumHgLvJItQ4sbjrm2P223I9oVM9P8AhLI2+JqRvbIwPYbtOyzNNbMuTT3Q5ACIAEAXFSXCFACEgC5QgexXknds1WqBW5EDnOJuXFTSRBtjLnmVLAhCmA1AhqYAdkCGlNARySMj7T3sa3+86yUpxissGIx7XjM0teDyN0RlGSzF5Ecl0l6WikkfRYZldK02km3DTyHesl+pSfDEwanV8L4YczmHYm8l0gDnyEavlfmt7lL7fwLjhHp1fJenU4M63NtzZp0zxPBHIBqRc258V2NPd31UZrqZXHDwUcSifO0ysa9oZcODuXMLk9o12XJ2JNcO2/1LYYRBRtgNDK6aPMGna2qho40PTSlOOcMlLi4kkxaXEKika2aJ72MzDqzmvYbWJ/jdWU6qUa+KXwt7dceWfRlsU1PMXv5HXdH+ksGIOZTVD2sqyP8AK/w7+5XV6iufXfwO3ptS7Pdns+j8TeJHMK/JswxFIQhTAaUwEKBCJgImIZxQAJgxpTEWsPrDSygP1ido4cu9UXVca25k4T4Wb7SCAQbg7FYTUgQAIAuKkuGvIaLnZAPYqSvMh7grorBW3kjUiA0piGpgCAEcmIbtfu3TAgc9tSx8cFQ3Pb1mODi32KDaa2ZFtSWEzkZYauasf8m4hW1D4yczswtcd2y487rZTcacvHUzKpt+7J+pkV82JzSCprDOyLPkEhZ2QRof/ihOuU3x2LL8en+CGpjdVPEnt5F/GMdxDDcJbTufA99Sz5iaE6hnE258At/eThXh4fgV23WQhh9epxIve5BN+JWR+ZzHktU9S6KN8ZaJGE6h3NWV6h1wcMZRTOG+TYoHvmYx7S1jGdjLbfn+C62jlO1Ka2S2xj1/XGDNJYLxAc0tcAQdCCuk0pRaZV1KtZNHRw9hmp7IaAsupujpqsRW75E4R4mZFJWET2nsYnAjLbRvsXK0urxY1Z8L6dPQ0yhmPu8yAVbIXvNNGI5HPvmOuVtuHtVFs4ym3BYR6HQXy0eid1aXG5Yy98JRzsdt0b9CxfDmyPZaePsSgOO/P2rbRXXZDdbnTp7b1dkfi3/JGmyJlLilNT05cBO14yl2lxqpznXRJNvmXytnrKJuazJNYePUuOka3N1nZy75tLLHpu2qLre63T6ZM9uishDj6HKYl0jio8RnY5ksrA5oD4ajLbbhqF6CNMpLKePkc12JSw0aGEYw2pZNUObUtpWkDPLlcGO7yNvE6KuUeF4b3JRlxbo0m11E5z2sqqclvrWlbp70iQja6jcTlq6c2NjaVuh80wGiuo3erV05tppK34pgEdZSzW6mphkvtkkBuhCZKVIQ3fTiECNzBpzJTmMntRn3LBqIcMsmmp5WC+NlSWggC4qS4rVD/qjZWQXUhJkKsIDUCGlMQ1MBCmBnYtXzUPV9TSicv0A6yx9gWe+51Y2K5trkjIhx+qrK3qIqfqGlps17CXXG5GuvgFkeqtlLhjHmQ4pcXC1hmf8AJM9XPLUMk6mITtiEmTK6UucGk2FrC5Va0ssubk0Fdfezedkv1xudDhmEw4a8mJkJaRo7qgHt7rrfRRKt88r9SUa4p7ISnijnlxKinYHx9cHZTxD2g/fdOCTcq3/MmjURjKEG+q+h5ZjLmOxKojhe98ELyyIOOzRw8N1inFcWEefuxxNLktiGFsDYZJ552RNiaTY8Qp01QsTcpY/uZWpTkoRWcmJUdL2NpyygpS2TTLLKA6/O4VylCO0UdunsLE1K6WV1SJ6DptHTVGZ1I/qXNAeGvAAPGzdk9NaqbHJcn0K7P9POS2nv0/yd/TzsqaaOeE5opGhzXc7ruRmpLiPMWQdc3CXNDJ6aKdzDM3Nl1Gqrt09dslxrkJSa5GPiWGyMz1AfnBNzfcLk6rQ2RzYnlGmq3KSMZw7R0toucjuL/wBuT/8As/8AA6LoRWup8UfD9SVh07xxV/2iyjT2TgstLP64/uHZ6T1MIyeE9v7/ALnV1DicZoHAkOyyEdxsF5SWotuhOyyTbyj3NVUK6nGK22NmpAqYTUWaSezM21xfn4FF7dsFqIbNbS8n0fzM8Pdfdy5dDma2tocHkZS1WCwTQOJdG8Rx2F+Fi3TzXt+ytVLXUccZ4lHZr+/P+M4OrgtNLhccroY8sdeJXY5gUJpKO9uriABaABe7diL3vuF2cw/2LXlmJ8Xx1rY0MJipZTUVGI4NSNklc0tyU7XNIyi5APq3N9BooSrecJ5x4jU/Efh1HhsRrPSMKp3Z6hzo7U7HdkgWG2ngo8Eh8aDC6LDqaGVlXhcBc6d72g0zHdkuuBsn3cmHGiDD34bgOExz19EyGWJz7ysgaSMz3W1A5EI4GhZTOlY4PYHN2cLhNDBMRoYI61Vl+01ZtSsxLanhm2FiNIIAtuNgSqUWspOOYknmr0sFYiYhpQIaUxDU8gG6MgMcWjtE27+STwt2IxZKzDmTP9Mewugqc8JbdxFwDpbvLlilqdPF+8+X86DtcXwyfMgr8dpJoQyKOUkSMdewAs17Xc+5UWdpUtYSb5dPP8wrtUH6/Qmb0iozvHUN8Wgqxdq0vmn+n7lfGio/GqaKtqqhokdHJTtA7OuYF34EKv2lSpuSz6FsroupR6rJ59NHLHEx7GkCUF0ry3mdveujdTOquOF8S3f59DyisjZZLJl4uYhQ1LSR1QjLdTa5WCxx48R5I2aLi7+GPE4iCF8zwxgJcTYWVii5PhS3PaN8KzJ8i6aajpXATl9RLxa0hrW+JWmUaatp+8/LZFMXbb70PdXnuzWoek9ZSxNhpqh0TG2DWSAPb4XtcKdeqaWIvC890Yr+yabJOyxJ9W1s/rhnpjHtkY2RjgWvFwRsR3LsI8JKLi8S5oR4DhY2yncHioWSUYOTx8y/R6d6nUQpTw5NIyX4VSSTm7nMJt2Q4Cy83LDk2kfU1/prSqjuXKTWc5yueMeBJRUtPRztqIZHF0ZuMzgQkmuGUfxJr1Ix/wBLaSE4yUpZi8814/kakmIvdUwVBMeZgcGWGmo14rnLs2jha3381+x2lo4JcO50uCVUktJFVSs+blc6NwHHKSD9xK5llT0N3vLMJbPzXX5nJ1VcVJ1p7oi6Q4SytppKZxufXhf38P3q7RaqfZetU+cX+sX/AHX1MWopWqpx1/ucjgfyo3rqQRVklK15E0UMTpLOHDTb8V9DlbRKMbc/kzzcIW4cTdDqgAf0ZifeBRP+CPtNXiPuJ+BVko53kXosYsL2DaR4/wDXvUftFX4h9zPwEdQyE3FDjIPdSvP4I+0VfiDuZlLpXFV1OCS08eHVrHSPY1vW07mNuXcyLJu+uWyYu6lHdo6qFpZDG06ODACORskuQ2OUhFzCD+XM8Cs+o+Asq+I3xssJqBAFiX1Cqo8y2RVVxUIm3gZFFLHO5zYJGSFujgxwJae/kh7cyK957FXEsRhw0xiqbI0SfW6txa3vJAsFH35fAs/NL6g+FfE8E0ckk0DJ6eLrY3jM1zHDUe1UWX2V862/mi2NSl1M/EK2rjblipnRu+1K02C5l/a8oLEa2n5lv2ST+GSOeqY66qJ66oEg5F2nkuVPXyseZNkX2fc+qK3yfMDe7NraFVfaK08EfZ13kAoZebP9SPtMQ9n3dcEjcOcfXkHsCi9SuiLI9nS6yH/J0ZaQ9znXHcEo6qXEvAs9nQw92c7XU7pqcwscLg7Hjbgvpuqpeo06UHzw/ofO4SVV0uLplHNV1G2shfSy3aL7jgQvLvMJb9Dr6fUSosVkdzAbR/J4qBCTLKC2KMhupLrfFb9O+CmV3XkelquerVaxjOXj8v8Ao0cM6D43U1MYqqR1NA43fI97b28Ad1y56mCWzyztxpk3k7/Eui2GVWEuomU0cb2sIilDe011tDfjqsML5qfEzTOqHCzP6JiQdHaETXz9Xsd917jSqXdJSPlna7i9dZw+JemqKbOyN72l19AOap1ltPduEnuT7FjL2hS1+JGc8Xr3X3ufuXA3Pt23CQs+hfYDgkN8xXn5uHw/FAHoWBys/mrBFcdYZ5TbkOscud2vdWqFX/Vk81qot66UumF9EaEH5RAYD9IzWM/guXV/6ip0v4lvH9v2M8/u5cXR8y3gLmMc+IMa1zznJA3O2veun2Pq5SXcT6cvyM+qqSfGjaXeMQIHkEBk5/px/UjdP7VD/wAwrqP9xFVvwGYdyusjANTEXcHF61p5NKz6j4Cyr4jeGywmoEAWJRdhCqjsy2W6KpVxUQ1QkdTvENs/C4uDrqPK6nHhz73IUs42MQ0+BVjgaygbTztPrxjKQe4jZXtXwXuSyvMqUq5fEsFqLDJmf1Vj84HCOZwlH/lqqZT/ABwLFH8MiTrukNJ9JS0tY0fWidkcfYfiq+HTyezaHm2PTJBVY88fnEFXQ9kg9ZFnZfTW49qsjQmsbSIytfPkSwYlR1brRmlmu7QMcGuAJ00PcsV3Zmnkvehj5f3RbXqp52eSVzKd1s7ZYbgfSNuNSQPuXPt7Bqx93I0x1z/qRGKGOQXgkgkva1tCf4subb2NfBZjuaIayuRFJQuZq+nI9iw2aS+HODL1bB8mRdRF9gLNjOxYmchjtOaTEJA0dlwzsH3r6X2NrO/7OUlvKO3py9T5z21pXTrJLG0t0cxXtInMv1JdQVzNZ70++Xwy5FNUk4cPVGc+zanrI2jOx4eDycNiuppaK56RQaynz/M7ektlXGMovkek4XP6fh1PVFgDpWAu048V5LU0dzdKtck2e501/e1Rm+qRdy6HwVOC1s8/hrZYaQ04aLEk3vsCV6bUdpZTrgtttz5RqeG2+ViIaQD0uL9ZcuKWcs6PZH/Oq/8A0i+/8/d4n7lZ1PsX9JCz6F/iEkOXMHfRw+H4oYztuj5vhrQftyf8ivN9qf8AKl8vocLV/wC8/l9DWiD3SRiMOz37Nuax1qbmlV8XT8zJJpL3uRbpZ2y40xrCxpaHB7QfrDQr22m7MjTF6qS96SW3RPq/mcKeq45d0nsitgvWemzZpy/5t2mcmy7Wowq1heBipy5vcTBTIG1pdUZ/mDbtk2RqeH3MLqKnL4t+g/BHOZTVjpJs9mA3zk2WXtWt2V8Fa3fIu0c1F8UnlFXH5BJgMlpestVwcdu0FzeytHqNNNq/m/PJq1N1dscwEduV6RHMGoEamBM7Ukh2FgPFZdU+SL6V1NdZDQCBFtwuCqS4pOFjZXoqE04pgVqmjgqBeSMF3Bw0KnGyUORVKEXzMSopY4sQjpIpHdY8XuQAB5a+5aY3txzJFMq0nhMsgYrSn5uR5b45h70vuLOaJfex5EgxqsjI9IgjeONwWqD0lb+B4JLUTXxLJVkkwupNqyhbIx25LQHN9o3Cfc2Q+Fi72D5otQ4FTujMmEYpWUwP1WSZmj/KdFRO+SeLIotVcXvCTGPw7HKfVpoa4N1bdhiedLbt02J4J99U11X6r+fMjKufk/0ZF8o1dGzJUUFfS2Fg5lpmCzbDaxtx2UuCE3zT/Tr/ADqGZR8v1J48bpKglhmpZTc2ZJeN+wsLHiTdZrezqrPjh4eZZDUyXJiVuEUOMPZEWTQPbmLXxkEaEc+Bv7ktHSuz3KdPJ4yv5/NyjXUR16UbdmuTXMzo+gFG+UNqqsy07TfIxuRxPIm+yt1F1VsOBQxvnn6+pgo7HULMuba8DTxLoTgOINgElJ1XUgNb1Dsl28jz+9V1Xzq2gdV6evCWDnxE7DJpKKGMz0sLiyIsIztaOBB38R5LkXSqvtlLOJZ3zyZ3qFZTVFYzHC+Q+XEYBBI70Wsis3SSoDWtJ2sADf3LRToYWTjGEsvO+Oi6mLWdoy09M7JrCSePFvpscDUwPgfleNSNNbo1Gmnp58M/kfPoS4kS4VD1lQHk2ya2tuVdpdN30JzfKP1Oj2XZjtCmP/yRYf8An7vE/cqOp9m/pIWfQv8AEJIlLmDvo4fD8UMZ2nR2RhpoodbulcL25vKy29iXau138SUPV7f9Hk+09fCnUuvGXt9DeinZBjTaRkZDRJlz5+7lZb6ewqKYLURk8rfp+xxp9oTnPu2iahpYWYw6RubMXvOrrjU+Cpr7atvtelcVhZWd87Fj0UYLvcspYIYvTpsrHX6p+pfcfcvR6pPu1v1X85nOo+Ni4AIpBWNYxzbwkE57/gqu0bJVVqfPG/6D0kVOTj4k9JBDTYfXOY15+bFw517+5cjs/tS3tGzE4qOPA236WOmg8PJj18jZOj85azIPTKfTNf6wXatji2O5iqxwSwWjuVoRUN4IEdDhsPU0bA7d3aK510uKeTXWsRLSrJggC4qS4rVDNcwVkHkhJdSAqwgCBEZjZnD8ozAWvbWyBNLORdhZSDJSxGCeohDKZ4a/MCbutcck4tRe4mn0KOHYfUNDxXhkhaOzI2zc55+H7la7fwlagXujWGPpsJjZWy/lhkfI9zX6tzOJA9gKpvtcp5XItphiGGaMzaqKJ5jnD7N+uwX9hCpi4OSTRZLiitmYrMVxGGwlbmH99u/ktz01MuRl7+yPMH4hQ1IyV+HRyC1zYAqP2acN4TJd/F/EiJtDghOakqqmhff6j3N+/RJq9fFHiGu66PAXqqacGPFxVx8bsGb/AFBcXtPtWGl+77v3/wBPQ2abSyt95y2LsFTUVVRHG+Q2J1A0XnqNXqNVqIwlLZvkdGdUK4NpHP4jG6jxWamlGhcXRuOxB2/juXU1WnXG5R9Dp6eStojNfzBodHImV5q4JW5o2hpjJHHW9vcrKqeOp1cTUuax0/ngYe0oRShJpPxMLpP0aLg80rMszBfINneCofadsc6fXPLXKX86Hmtb2LCxd9pFh/h8fy8zAwijqMpIieS27nm1g3xXrtNUqdBJy5y3/Y4nZcJy7UqwntIa+INq+sfLGxrtQC7XZcHhZ9n4ljBCyJoicDUQXNrdtLBJzTF9HD+qYyaIkDXtJ8LYKeTs+jQljpoHyAtjErnWI1IzFO3tfS6WtVS3n1x0/M8d2lpbLtbKS2W30RrYp2alssbw5snbbos199kknF5T5Fmlqr4XlboMNgxCoqWyAyxw5rl1gNO66Klda037qXkF/wBnqTwsyZPhdFiEVTK6eIiPI4N1bqTsvQ3WUzgknvscCqucZPYXCqHEIvS+vY5uaLKztDUo1FlM+FLxCmuyOchQUeJCjq21LXdY5lowXDUpWPTxsi60l8hwja4NSZlYxTVdPgEvprS0uq6ct1B+sOSsnOudseAUITjB8Q8j3rSigsYfTmoqWi3YZ2nn8FVdZwRJ1xyzolzzUImAIAuKkuGuAIsdkLYCrLGWagXCujLJW0RqRAaUxDSgBMruDT5Iyh4FLH29Q+SMoWGRkWOosfBS2FuBcS22YkIwgyZ2KUD6zLkndHZpFwpwlwkHFsKKkyQWqsj35tDa9hYcfNSc3nZi4fEnEEI2jb5I4peI1FIpvI6x9rAA2sF8/wC1bHPWTfyO/pI8NUSWieGVcTibDNqqNDJQ1MH5ll6zWyzj1LFiUDxTOY+piHqjiOXivVSdds3wS96PMz6K50TXF8LM/o011PiLY3XB7TNeW6ool98n4/U2a9qdTkjSxmaN7zGWFsjTo++6wdr21OXd495dfzMWkhPmnsZUvzlPNC0gF7SNBbVLsvtR0ruLX7r5Pw/wWT06jbG6K5P1OHxnD6iCsphI5sb53dXE2/rO7l6OGkumsxWTr+19EnvMd/NrF/rNYD+uFnu+4hx2PCJw7T0k3iMs/I2MG6Ox0rmz1sglnbqGg6NP4rzmq7UlZ7ley8Su7WOXuw5HQNs43Bsquz+z7dbP3fh6v+dTl36iNK8WOZJiEYDWV7A0DstMLTYL3VWipqgoJbI4UtTOTzkd6Vin/UB+wb8Vd9ngR76QGrxQW/pEa7fMBH2aAndMT0zFR/bx+wCa0tYd/MT03Ff08fsAj7LWHfzK1d6dXwiGrrs0TXtflbEBctNwpwohF5RGV0msMlawyODWDtu2CuclHdlSWXg26dgpKVrI7OlkdYd5+AWCbdksvkaopRRd9t+9VImImAIAuKkuEO6ACyYiJ0DHHkeaak0JxTG+jNvuSnxsXAgMIbfIB7UcWeYcOBgaXMcwgtO4N0+TF0wIZnNhY83IBs5HCmwbwiV4jLLusRa91FZRJ4IX0gcPm3KxWY5kHDPIqSwuj7LmgDnZWqSZW00RlTExqBGU118xPF5PvXzjVy4tRN+b+p6SqOIRXkLcEkKgtwT0U/o9Q14HZ2cO4rVotR9nvU/kyq6pWQwa76K2IwVUNspJz+R1XrHUu9jZE56u+5lXIzcXP5e632QvN9rf8pryRs0ixUZ4cRORzaCPM/uXOa2NGCRz25RmYHZO0LjbwXY0nbWo09LqW/g/D9zFdoa7J8XI8kxapNdilVVON+skJHgNB7gvoWljJUw493jc83bKLsk48slWwV2EV5YWTwAWHJGEGRCBY6IwgPW8EpDQ4RSUxHaZEM36x1PvJWV7suXIuFMBqAHNY57gGgm5toVFyS3DGTSpYBSPmcO05jNTbieSy2T40i+KUWyeBslmltmAC2dw1t3D8VVLHIaLgFmgcgoloIECALipLhCgATECAEKAI3McPUf5o4l1QsDD1w3a13IhT90W41rTlc2RpaHcd0PyElnmNphdkkEltNvBOfNSQR32G0ryHugl9Zvqk8QnNZXEhRe/CxI5ermNPOL3N2OPFDjmPFESlh8MirWNNPUagdW71Srq3xR8yE1hjHNcG5rWBGnehyWGhYwY0WsY5r5rY8zb8z08eQjXjrnt7glgY+/NIbOgwapEtP1biS6PTXkvVdlarvauB84/Q5Wrr4J8XRmNXy9ZWzO4ZrD2aLga2zvNVOXn9NjfRHhrSJaCgFXG+W+Vzey0/wAexa9BoY6qiW+Gns/kU6i91WLwMjpUKjC8FrJ3tLcrMrH8MziGt95HvVmi7Kvlra67I7Z3flzf0K9RrIKiUovfGx5O0ANAGw0X0nOdzzC2QqQAgAQBdwSkNbi9JT2uHSAu8BqVGTxFjjzPWiNbDgsxcJbgBcnayG8AWI6GTOwS9nMfV4/uVTuWHgmoPqaAhZHUNZGyzGC7uZPBZ+JuOX1LcJPYMrmZiZY4w45iSbkJZWOQYZJDCxzg90jpiNi8aexJya2Ww0iyoEhEwBAFxUlwhQAJiBAAUANI5aJARlr79mTzCmsdUR38RpbOd5WeSMx8A38RGwuac+YFx4AaJuSewKPUr1mW7ZMzRIw30cNQp1t8uhCfiLUNjqYWuzBrwLi5slButhJKSFiIq6d0NQO23Q39xQ8wlxRBe8sMqgSULnNeWy0x3N/V9inPFsduZFZg9+Rgw2ELbcNu9fOJJqePM9Mug2pbkfHJFqS2zx3grRb3XBDu303/ADKq+PL4vEdnvqQ4ezRZ2kXFiirDSziQXy2s4WtcLRpL5ae1TRXbUrI8LK+fbMbncn8VnjGU+azkml0OjwdrGUTG5253dogG5F+C9f2XWqtNFPm93+3yORqm3Y2cd/K7W5MPoaAX+elMr+9rBoPNwP8AlXf0MffcvA5mpfuqPieXrpGMEACADwTA7P8AkxwsVuKVVVISGQR2B5Od+4LJqbeBJIuphxHpMVBDmvZxaOJO6xO6WDQq11JooozNmDA1rfVtuoSlJRwPCzlDS5zJXPex+Y6aN2CeE0kgbwxOsY535vM5x3NrXT4WuoZ8iWKNm5gDDfS9iVFyfiSSXgTqIwQAiABAFxUlwhQAJiBAAUAIgCtiFXHQ0klTM2QsjFyI2Fzt+ACTeFkcY8TwYEvS/D36NbiDRyFG/wCCgr4roWPTTfVepAek2Gu9cYif+zkVi1cVyRD7JP8AEh0XSTB4zmNPiDyNi6kfp7knq+Ia0jXVeo2p6Y07hlhhrWt5+ivv9yIXVLeWfRilp7Xya9UNpOk2Fwsc6Smrnyu3/I3m3dsnZqk3hZwOGka549SGfpTSTytDoK2OG+rW0j9u/RSjqaorbOfmQlpbZPGyX5ooT41SNneIKetdEXXB9FcMvdsvKans2crHKtbM7FVi4VxDflunt+b1n+2f8FR7Mv8AAs7yHiHy3T/o9Z/tn/BHs3UeAd5DxA43T/o9Z/tn/BHs2/wH3kPEWXH4G4fM2KlrHT3BjHozgCbcTZdLR6WdcHGzx/TqUzsxLMWuRzbcc6SNkzspWMcNiKaTQ+a7C0+gTynL+fIxu/WuOHwfz5lLHajG8cqY6jEKVxeyPq29XA8C2p2111XRq1mmqi0s+hzrNHfY8vh+TM75Nrf0Wb9k74K/2lR5+jIez7fFeqE+Ta79FqP2bvgj2lR5+jD2fb4r1D5Nrv0Wo/Zu+CPaVPn6MPZ9vivUPk2u/RZv2Tvgj2lR5+jD2fb4r1O86DYpR4HhMsNdT1ramWUveWUr3C1tNbLFqNZCyzKT9DRVo5wjzXqjeb0xoWkj0evcP8I/4Kl3w8/Qs+zT8V6jX9KsLPaZDiLD/hH/AAUlqkuafoJ6SfivUu4NjrMTqjTwCcgNzEzwPYLeJCathPkiEqZw3bN3+LpkBExAmAIARAAgC4qS4QoAExAgAKAEQAlrlACEAH9yMCyJYch5J4DLCw5DyRhBlhYfwEYHkLDu8kYQC5RyHkkGQyjkPJAssblBOw8kxAWgDQDyQMQAch5J4ALDu8kYQnsIQOQ8kYQZCw5DyRhAFhyHkgAyjl7k8CEyjl7kYALDkPJGBZYWHIeSMDCw5DyRgWWNIHIeSeBZYAIDI7ggBqABMAQAiABAH//Z">

<br><br>
    <?php

    if(!$conn){
        echo"connection failed";
    }//else { echo "connected";}


    if(isset($_POST["D1"])){
        try{
         if($conn->query("Drop table Flight;")=== true) {
            echo"<center><b>\n \nDropped  Flight Table \n \n</b></center>";
        }}catch(Exception $e){
            echo "error table does not exist";}
        $conn->close();
    }
    if(isset($_POST["C1"])){
        try{
        if($conn->query(" create table Flight (vacation_ID int references Vacation(vacation_ID), flight_number int, cabin_class varchar(15)); ")===TRUE) {
            echo"<center><b>\n \nCreated Flight Table \n \n</b></center>";
        }}catch(Exception $e){
            echo "table already exists";
        }
        $conn->close();

    }
    if(isset($_POST["P1"])){
        try{
        if($conn->multi_query("insert into Flight values (1, 1000, 'economy');
        insert into Flight values (3, 3000, 'first');")===TRUE) {
            echo"<center><b>\n \nPopulated Flight Table \n \n</b></center>";
        }}catch(Exception $e){
            echo "error";
        }
        $conn->close();

    }
    if(isset($_POST["Q1"])){
        echo"<center><b>\n \nQueried Flight Table \n \n</b></center>";
        try{
        $sql="SELECT vacation_ID, flight_number, cabin_class FROM Flight";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "Vacation ID: " . $row["vacation_ID"]. "   |    Flight Number: " . $row["flight_number"]. "    |    Cabin Class: ". $row["cabin_class"]. "<br>";
        }
    }else{
        echo"No Results";
    }
}catch(Exception $e){
    echo "Not data to query";
   }
    $conn->close();
   }

   if(isset($_POST["S1"])){
    include 'SetFlight.php';
    include 'Connection.php';
    $VacationID01 = $_GET['VacationID1'];
    $FlightNumber01 = $_GET['FlightNumber1'];
    $CabinClass01 = $_GET['CabinClass1'];
    //$sql ="insert into Flight ('$VacationID01', '$FlightNumber01', '$CabinClass01');";
    $sql ="insert into Flight(vacation_ID, flight_number, cabin_class) Values ('$VacationID01', '$FlightNumber01', '$CabinClass01');";
    mysqli_query($conn, $sql);


   }
                




   if(isset($_POST["D2"])){
    try{
     if($conn->query("Drop table Cruise;")=== true) {
        echo"<center><b>\n \nDropped Cruise Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "error table does not exist";}
    $conn->close();
}
if(isset($_POST["C2"])){
    try{
    if($conn->query("create table Cruise (vacation_ID int references Vacation(vacation_ID), cruise_destination varchar(30), cruise_company varchar(30));")===TRUE) {
        echo"<center><b>\n \nCreated Cruise Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "table already exists";
    }
    $conn->close();

}
if(isset($_POST["P2"])){
    try{
    if($conn->multi_query("insert into Cruise values (2, 'Hawaii', 'test cruise company');
    insert into Cruise values (4, 'Bermuda', 'Cruise Company 2');")===TRUE) {
        echo"<center><b>\n \nPopulated Cruise Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "error";
    }
    $conn->close();

}
if(isset($_POST["Q2"])){
    echo"<center><b>\n \nQueried Cruise Table \n \n</b></center>";
    try{
    $sql="SELECT  	vacation_ID, 	cruise_destination ,	cruise_company FROM Cruise";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Vacation ID: " . $row["vacation_ID"]. "   |    Cruise Destination: " . $row["cruise_destination"]. "    |    Cruise Company: ". $row["cruise_company"]. "<br>";
    }
}else{
    echo"No Results";
}
}catch(Exception $e){
echo "Not data to query";
}
$conn->close();
}

   if(isset($_POST["S2"])){
    include 'SetCruise.php';
    include 'Connection.php';
    global $VacationID02, $CruiseDestination02, $CruiseCompany02;
    $VacationID02 = $_GET['VacationID2'];
    $CruiseDestination02 = $_GET['CruiseDestination2'];
    $CruiseCompany02 = $_GET['CruiseCompany2'];
    $sql ="insert into Cruise(vacation_ID, cruise_destination, cruise_company) Values ('$VacationID02', '$CruiseDestination02', '$CruiseCompany02');";
    mysqli_query($conn, $sql);


   }


if(isset($_POST["D3"])){
    try{
     if($conn->query("Drop table travel_agent;")=== true) {
        echo"<center><b>\n \nDropped Travel Agent Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "error table does not exist";}
    $conn->close();
}
if(isset($_POST["C3"])){
    try{
    if($conn->query(" create table Travel_Agent (agent_ID int, customer_ID int references Customer(customer_ID));")===TRUE) {
        echo"<center><b>\n \nCreated Travel Agent Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "table already exists";
    }
    $conn->close();

}
if(isset($_POST["P3"])){
    try{
    if($conn->multi_query("insert into Travel_Agent values (1, 1);
    insert into Travel_Agent values (1, 2);")===TRUE) {
        echo"<center><b>\n \nPopulated Travel Agent Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "error";
    }
    $conn->close();

}
if(isset($_POST["Q3"])){
    echo"<center><b>\n \nQueried Travel Agent Table \n \n</b></center>";
    try{
    $sql="SELECT  	agent_ID, 	customer_ID  FROM travel_agent;";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Agent ID: " . $row["agent_ID"]. "   |    Customer ID: " . $row["customer_ID"]. "<br>";
    }
}else{
    echo"No Results";
}
}catch(Exception $e){
echo "Not data to query";
}
$conn->close();
}
if(isset($_POST["S3"])){
    include 'SetTravelAgent.php';
    include 'Connection.php';
    $AgentID03 = $_GET['AgentID3'];
    $CustomerID03 = $_GET['CustomerID3'];
    $sql ="insert into travel_agent(agent_id, customer_id) Values ('$AgentID03', '$CustomerID03');";
    mysqli_query($conn, $sql);


   }


if(isset($_POST["D4"])){
    try{
     if($conn->query("Drop table Purchases;")=== true) {
        echo"<center><b>\n \nDropped Purchases Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "error table does not exist";}
    $conn->close();
}
if(isset($_POST["C4"])){
    try{
    if($conn->query(" create table Purchases (customer_ID int references Customer(customer_ID), vacation_ID int references Vacation(vacation_ID), primary key(customer_ID, vacation_ID)); ")===TRUE) {
        echo"<center><b>\n \nCreated Purchases Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "table already exists";
    }
    $conn->close();

}
if(isset($_POST["P4"])){
    try{
    if($conn->multi_query("insert into Purchases values (1,1);
    insert into Purchases values (1,2);
    insert into Purchases values (1,3);
    insert into Purchases values (2,1);
    insert into Purchases values (2,2);
    insert into Purchases values (2,3);
    insert into Purchases values (1,4);
    insert into Purchases values (4,5);")===TRUE) {
        echo"<center><b>\n \nPopulated Purchases Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "error";
    }
    $conn->close();

}
if(isset($_POST["Q4"])){
    echo"<center><b>\n \nQueried Purchases Table \n \n</b></center>";
    try{
    $sql="SELECT  	customer_ID ,	vacation_ID FROM Purchases";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Customer ID: " . $row["customer_ID"]. "   |    Vacation ID: " . $row["vacation_ID"]. "<br>";
    }
}else{
    echo"No Results";
}
}catch(Exception $e){
echo "Not data to query";
}
$conn->close();
}
if(isset($_POST["S4"])){
    include 'SetPurchases.php';
    include 'Connection.php';
    $CustomerID04 = $_GET['CustomerID4'];
    $VacationID04 = $_GET['VacationID4'];
    $sql ="insert into Purchases(customer_id, vacation_id) Values ('$CustomerID04', '$vacationID04');";
    mysqli_query($conn, $sql);


   }

if(isset($_POST["D5"])){
    try{
     if($conn->query("Drop table Customer;")=== true) {
        echo"<center><b>\n \nDropped Customer Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "error table does not exist";}
    $conn->close();
}
if(isset($_POST["C5"])){
    try{
    if($conn->query(" create table Customer (customer_ID int primary key, customer_name varchar(30), travel_insurance varchar(1));")===TRUE) {
        echo"<center><b>\n \nCreated Customer Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "table already exists";
    }
    $conn->close();

}
if(isset($_POST["P5"])){
    try{
    if($conn->multi_query("insert into Customer values (1, 'Test','N');
    insert into Customer values (2, 'Tes2t','Y');
    insert into Customer values (3, 'John 3','Y');")===TRUE) {
        echo"<center><b>\n \nPopulated Customer Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "error";
    }
    $conn->close();

}
if(isset($_POST["Q5"])){
    echo"<center><b>\n \nQueried Customer Table \n \n</b></center>";
    try{
    $sql="SELECT  	customer_ID, 	customer_name ,	travel_insurance 	 FROM Customer";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Customer ID: " . $row["customer_ID"]. "   |    Customer Name: " . $row["customer_name"]. "    |    Travel Insurance: ". $row["travel_insurance"]. "<br>";
    }
}else{
    echo"No Results";
}
}catch(Exception $e){
echo "Not data to query";
}
$conn->close();
}
if(isset($_POST["S5"])){
    include 'SetCustomer.php';
    include 'Connection.php';
    $CustomerID05 = $_GET['CustomerID5'];
    $CustomerName05 = $_GET['CustomerName5'];
    $TravelInsurance05 = $_GET['TravelInsurance5'];
    $sql ="insert into Customer(customer_ID, customer_name, travel_insurance) Values ('$CustomerID05', '$CustomerName05', '$TravelInsurance05');";
    mysqli_query($conn, $sql);


   }





if(isset($_POST["D6"])){
    try{
     if($conn->query("Drop table Vacation;")=== true) {
        echo"<center><b>\n \nDropped Vacation Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "error table does not exist";}
    $conn->close();
}
if(isset($_POST["C6"])){
    try{
    if($conn->query("create table Vacation (vacation_ID int primary key, price int, accomodations varchar(30), insurance_required varchar(1));")===TRUE) {
        echo"<center><b>\n \nCreated Vacation Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "table already exists";
    }
    $conn->close();

}
if(isset($_POST["P6"])){
    try{
    if($conn->multi_query("insert into Vacation values (1, 10, 'Hotel','N');
    insert into Vacation values (2, 20, 'Cruise Cabin','N');
    insert into Vacation values (3, 300, 'Cabin','Y');
    insert into Vacation values (4, 400, 'Cruise Penthouse','N');
    insert into Vacation values (5, 500, 'Hotel','N');")===TRUE) {
        echo"<center><b>\n \nPopulated Vacation Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "error";
    }
    $conn->close();

}
if(isset($_POST["Q6"])){
    echo"<center><b>\n \nQueried Vacation Table \n \n</b></center>";
    try{
    $sql="SELECT vacation_ID ,	price ,	accomodations, 	insurance_required FROM Vacation";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Vacation ID: " . $row["vacation_ID"]. "   |    Price: " . $row["price"]. "    |    Accomodations: ". $row["accomodations"]." |    Insurance Required: ". $row["insurance_required"]. "<br>";
    }
}else{
    echo"No Results";
}
}catch(Exception $e){
echo "Not data to query";
}
$conn->close();}
if(isset($_POST["S6"])){
    include 'SetVacation.php';
    include 'Connection.php';
    $VacationID06 = $_GET['VacationID6'];
    $Price06 = $_GET['Price6'];
    $Accomodations06 = $_GET['Accomodations6'];
    $InsuranceRequired06 = $_GET['InsuranceRequired6'];
    $sql ="insert into Vacation(vacation_ID, price, accomodations, insurance_required) Values ('$VacationID06', '$Price06', '$Accomodations06', '$InsuranceRequired06');";
    mysqli_query($conn, $sql);


   }



if(isset($_POST["D7"])){
    try{
     if($conn->query("Drop table LOI;")=== true) {
        echo"<center><b>\n \nDropped Location of Interest Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "error table does not exist";}
    $conn->close();
}
if(isset($_POST["C7"])){
    try{
    if($conn->query("create table LOI (loc varchar(30));")===TRUE) {
        echo"<center><b>\n \nCreated Location of Interest Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "table already exists";
    }
    $conn->close();

}
if(isset($_POST["P7"])){
    try{
    if($conn->multi_query("insert into LOI values('Toronto');")===TRUE) {
        echo"<center><b>\n \nPopulated Location of Interest Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "error";
    }
    $conn->close();

}
if(isset($_POST["Q7"])){
    echo"<center><b>\n \nQueried Location of Interest Table \n \n</b></center>";
    try{
    $sql="SELECT loc FROM LOI";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Location of Interest: " . $row["loc"]. "<br>";
    }
}else{
    echo"No Results";
}
}catch(Exception $e){
echo "Not data to query";
}
$conn->close();
}
if(isset($_POST["S7"])){
    include 'SetLOI.php';
    include 'Connection.php';
    $LOI07 = $_GET['LOI7'];
    $sql ="insert into LOI(loc) Values ('$LOI07');";
    mysqli_query($conn, $sql);


   }


if(isset($_POST["D8"])){
    try{
     if($conn->query("Drop table toi;")=== true) {
        echo"<center><b>\n \nDropped Time of Interest Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "error table does not exist";}
    $conn->close();
}
if(isset($_POST["C8"])){
    try{
    if($conn->query("create table TOI (doi date); ")===TRUE) {
        echo"<center><b>\n \nCreated Time of Interest Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "table already exists";
    }
    $conn->close();

}
if(isset($_POST["P8"])){
    try{
    if($conn->multi_query("insert into TOI values('2023-09-22');")===TRUE) {
        echo"<center><b>\n \nPopulated Time of Interest Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "error";
    }
    $conn->close();

}
if(isset($_POST["Q8"])){
    echo"<center><b>\n \nQueried Time of Interest Table \n \n</b></center>";
    try{
    $sql="SELECT doi  FROM toi";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Date of Interest: " . $row["doi"]. "<br>";
    }
}else{
    echo"No Results";
}
}catch(Exception $e){
echo "Not data to query";
}
$conn->close();
}   if(isset($_POST["S8"])){
    include 'SetTOI.php';
    include 'Connection.php';
    $TOI08 = $_GET['TOI8'];
    $sql ="insert into TOI(doi) value ('$TOI08');";
    mysqli_query($conn, $sql);


   }


if(isset($_POST["D9"])){
    try{
     if($conn->query("drop table Contact;")=== true) {
        echo"<center><b>\n \nDropped Contact Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "error table does not exist";}
    $conn->close();
}
if(isset($_POST["C9"])){
    try{
    if($conn->query("create table Contact (customer_name varchar(30) primary key, customer_contact varchar(50)); ")===TRUE) {
        echo"<center><b>\n \nCreated Contact Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "table already exists";
    }
    $conn->close();

}
if(isset($_POST["P9"])){
    try{
    if($conn->multi_query("insert into Contact values ('Test', 'test@gmail.com');
    insert into Contact values ('Tes2t', 'twotest@torontomu.ca');
    insert into Contact values ('John 3', 'John3@outlook.com');")===TRUE) {
        echo"<center><b>\n \nPopulated Contact Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "error";
    }
    $conn->close();

}
if(isset($_POST["Q9"])){
    echo"<center><b>\n \nQueried Contact Table \n \n</b></center>";
    try{
    $sql="SELECT customer_name, 	customer_contact FROM Contact";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Customer Name: " . $row["customer_name"]. "   |    Customer Contact: " . $row["customer_contact"]. "<br>";
    }
}else{
    echo"No Results";
}
}catch(Exception $e){
echo "Not data to query";
}
$conn->close();
}
if(isset($_POST["S9"])){
    include 'SetContact.php';
    include 'Connection.php';
    $CustomerName09 = $_GET['CustomerName9'];
    $CustomerContact09 = $_GET['CustomerContact9'];
    $sql ="insert into Contact(customer_name, customer_contact) Values ('$CustomerName09', '$CustomerContact09');";
    mysqli_query($conn, $sql);


   }





if(isset($_POST["D10"])){
    try{
     if($conn->query("drop table Agent_details;")=== true) {
        echo"<center><b>\n \nDropped Agent Details \n \n</b></center>";
    }}catch(Exception $e){
        echo "error table does not exist";}
    $conn->close();
}
if(isset($_POST["C10"])){
    try{
    if($conn->query("create table Agent_Details (agent_ID int primary key, agent_name varchar(30), agent_contact varchar(50)); ")===TRUE) {
        echo"<center><b>\n \nCreated Agent Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "table already exists";
    }
    $conn->close();

}
if(isset($_POST["P10"])){
    try{
    if($conn->multi_query("insert into Agent_details values (1, 'Agent T.', 'at@test.com');")===TRUE) {
        echo"<center><b>\n \nPopulated Agent Details Table \n \n</b></center>";
    }}catch(Exception $e){
        echo "error";
    }
    $conn->close();

}
if(isset($_POST["Q10"])){
    echo"<center><b>\n \nQueried Agent Details Table \n \n</b></center>";
    try{
    $sql="SELECT agent_ID, 	agent_name, 	agent_contact 	 FROM agent_details";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Agent ID: " . $row["agent_ID"]. "   |    Agent Name: " . $row["agent_name"]. "    |    Agent Contact: ". $row["agent_contact"]. "<br>";
    }
}else{
    echo"No Results";
}
}catch(Exception $e){
echo "Not data to query";
}
$conn->close();
}
if(isset($_POST["S10"])){
    include 'SetAgentDetails.php';
    include 'Connection.php';
    $AgentID10 = $_GET['AgentID10'];
    $AgentName10 = $_GET['AgentName10'];
    $AgentContact10 = $_GET['AgentContact10'];
    $sql ="insert into Agent_Details(agent_ID, agent_name, agent_contact) Values ('$AgentID10', '$AgentName10', '$AgentContact10');";
    mysqli_query($conn, $sql);


   }

    if(isset($_POST["E"])){
        echo"\n \n Exiting \n \n";
        
        echo "<script>window.close();</script>";
        exit();
    }
    


    ?>

    <form method="post">
    <H1>Flight Table</H1>
    <input type="submit" class="button" name="D1" value ="Drop Flight Table">
    <input type="submit" class="button" name="C1" value ="Create Flight Table">
    <input type="submit" class="button" name="P1" value ="Populate Flight Table">
    <input type="submit" class="button" name="S1" value ="Set Flight Table">
    <input type="submit" class="button" name="Q1" value ="Query Flight Table"><br> <br> <br>

    <H1>Cruise Table</H1>
    <input type="submit" class="button" name="D2" value ="Drop Cruise Table">
    <input type="submit" class="button" name="C2" value ="Create Cruise Table">
    <input type="submit" class="button" name="P2" value ="Populate Cruise Table">
    <input type="submit" class="button" name="S2" value ="Set Cruise Table">
    <input type="submit" class="button" name="Q2" value ="Query Cruise Table"><br> <br> <br>

    <H1>Travel Agent</H1>
    <input type="submit" class="button" name="D3" value ="Drop Travel Agent">
    <input type="submit" class="button" name="C3" value ="Create Travel Agent">
    <input type="submit" class="button" name="P3" value ="Populate Travel Agent">
    <input type="submit" class="button" name="S3" value ="Set Travel Agent">
    <input type="submit" class="button" name="Q3" value ="Query Travel Agent"><br> <br> 

    <H1>Purchases</H1>
    <input type="submit" class="button" name="D4" value ="Drop Purchases">
    <input type="submit" class="button" name="C4" value ="Create Purchases">
    <input type="submit" class="button" name="P4" value ="Populate Purchases">
    <input type="submit" class="button" name="S4" value ="Set Purchases">
    <input type="submit" class="button" name="Q4" value ="Query Purchases"><br> <br> <br>

    <H1>Customer</H1>
    <input type="submit" class="button" name="D5" value ="Drop Customer">
    <input type="submit" class="button" name="C5" value ="Create Customer">
    <input type="submit" class="button" name="P5" value ="Populate Customer">
    <input type="submit" class="button" name="S5" value ="Set Customer">
    <input type="submit" class="button" name="Q5" value ="Query Customer"><br> <br> <br>

    <H1>Vacation</H1>
    <input type="submit" class="button" name="D6" value ="Drop Vacation">
    <input type="submit" class="button" name="C6" value ="Create Vacation">
    <input type="submit" class="button" name="P6" value ="Populate Vacation">
    <input type="submit" class="button" name="S6" value ="Set Vacation">
    <input type="submit" class="button" name="Q6" value ="Query Vacation"><br> <br> <br>


    <H1>Location of Interest</H1>
    <input type="submit" class="button" name="D7" value ="Drop Location of Interest">
    <input type="submit" class="button" name="C7" value ="Create Location of Interest">
    <input type="submit" class="button" name="P7" value ="Populate Location of Interest">
    <input type="submit" class="button" name="S7" value ="Set Location of Interest">
    <input type="submit" class="button" name="Q7" value ="Query Location of Interest"><br> <br> <br>


    <H1>Time of Interest</H1>
    <input type="submit" class="button" name="D8" value ="Drop Time of Interest">
    <input type="submit" class="button" name="C8" value ="Create Time of Interest">
    <input type="submit" class="button" name="P8" value ="Populate Time of Interest">
    <input type="submit" class="button" name="S8" value ="Set Time of Interest">
    <input type="submit" class="button" name="Q8" value ="Query Time of Interest"><br> <br> <br>


    <H1>Contact Details</H1>
    <input type="submit" class="button" name="D9" value ="Drop Contact Details">
    <input type="submit" class="button" name="C9" value ="Create Contact Details">
    <input type="submit" class="button" name="P9" value ="Populate Contact Details">
    <input type="submit" class="button" name="S9" value ="Set Contact Details">
    <input type="submit" class="button" name="Q9" value ="Query Contact Details"><br> <br> <br>


    <H1>Agent Details</H1>
    <input type="submit" class="button" name="D10" value ="Drop Agent Details">
    <input type="submit" class="button" name="C10" value ="Create Agent Details">
    <input type="submit" class="button" name="P10" value ="Populate Agent Details">
    <input type="submit" class="button" name="S10" value ="Set Agent Details">
    <input type="submit" class="button" name="Q10" value ="Query Agent Details"><br> <br> <br>


    <input type="submit" class="button" name="E" value ="Exit"><br> <br>
    </form>

 

    
    </body> 
</head>
</html>
