<?php 

return [
 	'alipay' => [
		'app_id'         => '2016091300505551',
		'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAyXvIpz6GvSicDjuiu9KAwFYdBiMbAAbfk6tumQu77FzzHOAaYPf/trZZvRvxwq+mTHHHVfDgh+dfdSGO3bBVeucXyp3tXulzVGiq7Zq4vKIbpgUGFuOMkzPre+1GRnP+Ulxw2VUWzOpvMQ/u3KY9uNeLJbO3AwMeAnuE1FvCmK+m4jxXxti+xBfFs6MqQcQK4foK1cvPGbE4dNN+pARKPVsfPmVvl2CjrUhW3tvDhHyIDx/duOK0sllwUutEdeSfKhiElJ9TCKftWxr2KE/IJu8Aoq38XrwE+TrFbiI0/uzb+kJBaJTYIXmBkKaAvWDcoP8YorvBrck1s4akx3jR0QIDAQAB',
		'private_key'    => 'MIIEpAIBAAKCAQEAsqZxjq9Ee9IvX4BK5MBIySH+YrEpoFN2YIgLbKZHhGyPrNRF1npBmuoPgbNNoFZFxlqWoxLcaoDIy5yQaYR0PQ/nz43QDz8q5M0i9P6/xZGAxxSvULxcXeIUUSx0Ba5EcXfqrieYLmI5Xrx7PlybuRWjeUeS651BlfSUSn6LOfyB5qAc3NmKg4I8E2tqPSMgPQf48A5weTHB78WbWVxq8AdtnpxpVwQjkgLNqk6pUEAvSb4UvIccUo/K2CXc3jlxqe+xFrSIWc37jUGVbthZrmCXCmvL93yShKNxqHFTUgCJBmoB1ZPbHTCMl03G5bikVqx05OXxSJz5uV8B7FYxpwIDAQABAoIBAAUBPLUum9CMNt+KDI8UA/X+ic3iALSJIgvaQ9erYN2I3Q2OdNZpXmUkoYKUr1wKjrHb39R5tssVCIsLu8/48fiz9V6PLoD+2AjI5m3OpTi3ts/c+HxeiofmyYLsp+Nw2mIDZgOzAERsZAcPaLR6i7JHtOi05JzNLwUwcOcVXHknWct52O6fjlFCvU0T/veUshzr65ptWF2pppNyx06vm+olTeT2DPglvV8I+4gUNgD+ldtoV00HYXh/53Ko7YNQvptg3NiadmW8PLF5u8wTiSaxk6FcDcjGLpdz2H+GnrtHYTxA39+NjPbPjEfkcP7rjghSxlgZkyWUnJcRs1ZxRQECgYEA4s/Frug8z6m++PxNXQoX9HewOxL72IR8svKZSqmkxSPL5zOGEAv6MTy+KNXFBNDwAFbdfh5zdBPE57f+kHcvYGL/IIu6UXlxk/zZTpg6X1xsjM+bN6WD7Ufcu1vLdeC74QYUXqE47Lm+R6HpDfmhCsJ1B850ZF7dymMmH0g94KECgYEAyaQCh4uwrVnk7TmEHFE1UpY1pY29/HyDYw23XU9hZNsfEzWNb0vGzoexmhXUFqotNM5RbkUF7E43pxctaNAi5cG3FjHWGdi+OiYZdW+Hf07IxTgR9CKRjZWsgWb7/8HYYlXucGQfLno9+BG8uHQaQXlVK/1bWJqVDVwJszaxxUcCgYAdxf6CPlQ1QmgiUSRqsTeBzPBiYNSUkJe5+eSri2doxZEvsXDIzHm0Wu/vdlhdkHvg34ZF1wN62ll/vYR6PFsIwRYSlKUJqvKA5bE1AwCuofhR57LNdDnEPSm5oowr1itzl5O29Fz/nkZfKt7oCbvdKLeqJazbvCRLPAa2Foqg4QKBgQCYfVoUW8XfMy53YJnSOG/U5xfm/YyCFz/ddxAGlvOWrEeR5VvyoSHWKrRbTMq54TSSzLy0YaqbDIP17wc+Trk1fAwT0tiRb2Jc41c5goC7/D7FNyQMtt/QbTKqIdHNlzEnHMlXYcBbC8M1iWRpMhRxE2sf+1hLZ4v1MHd9eo1yHQKBgQDJHxuCuKOAawFUj2G21G1UEY/GqXLL2Dq+FBaWVC7mWL8A0u3vZbi+cBrtrKy698Do3e3GmTbnl0p0i767+GS55MiUXe7yLJEDNgRXoymDOn0SFMuLNAqknycJTSlMyXH+sc95cl1w3q9GRYYfecaqZy83MnCaC7C04LlljrOlgQ==',
		'log'            => [
			'file' => storage_path('logs/alipay.log'),
		],
 	],

 	'wechat' => [
		'app_id'      => '',
		'mch_id'      => '',
		'key'         => '',
		'cert_client' => '',
		'cert_key'    => '',
		'log'         => [
			'file' => storage_path('logs/wechat_pay.log'),
		],
 	],

 ];